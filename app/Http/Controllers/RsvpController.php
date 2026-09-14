<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'institution' => ['nullable', 'string', 'max:150'],
            'attendance' => ['required', Rule::in(['hadir', 'tidak_hadir', 'ragu'])],
            'guest_count' => ['required', 'integer', 'min:0', 'max:20'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        if ($validated['attendance'] === 'tidak_hadir') {
            $validated['guest_count'] = 0;
        }

        $validated['ip_address'] = $request->ip();
        $validated['user_agent'] = substr((string) $request->userAgent(), 0, 500);

        Rsvp::create($validated);

        return back()->with('rsvp_success', 'Terima kasih. Konfirmasi kehadiran dan doa restu Anda sudah tersimpan.');
    }

    public function index(Request $request)
    {
        $status = $request->string('status')->toString();

        $query = Rsvp::query()->latest();
        if (in_array($status, ['hadir', 'tidak_hadir', 'ragu'], true)) {
            $query->where('attendance', $status);
        }

        $rsvps = $query->paginate(25)->withQueryString();

        $summary = [
            'responses' => Rsvp::count(),
            'hadir' => Rsvp::where('attendance', 'hadir')->count(),
            'ragu' => Rsvp::where('attendance', 'ragu')->count(),
            'tidak_hadir' => Rsvp::where('attendance', 'tidak_hadir')->count(),
            'guest_total' => Rsvp::where('attendance', 'hadir')->sum('guest_count'),
        ];

        return view('admin.rsvp', compact('rsvps', 'summary', 'status'));
    }

    public function export(): StreamedResponse
    {
        $filename = 'rsvp-fajar-ranti-'.now()->format('Ymd-His').'.csv';

        return response()->streamDownload(function () {
            $handle = fopen('php://output', 'w');
            fwrite($handle, "\xEF\xBB\xBF");
            fputcsv($handle, ['No', 'Nama', 'Instansi', 'Status', 'Jumlah Hadir', 'Ucapan', 'Waktu'], ';');

            Rsvp::query()->latest()->chunk(500, function ($rows) use ($handle) {
                foreach ($rows as $i => $row) {
                    fputcsv($handle, [
                        $row->id,
                        $row->name,
                        $row->institution,
                        $row->attendance,
                        $row->guest_count,
                        $row->message,
                        optional($row->created_at)->timezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                    ], ';');
                }
            });

            fclose($handle);
        }, $filename, ['Content-Type' => 'text/csv; charset=UTF-8']);
    }
}

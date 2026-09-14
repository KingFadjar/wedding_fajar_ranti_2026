<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class WeddingController extends Controller
{
    /**
     * Halaman cover.
     */
    public function cover()
    {
        return view('wedding.cover');
    }

    /**
     * Halaman undangan.
     */
    public function invitation()
    {
        return view('wedding.invitation');
    }

    /**
     * Halaman galeri.
     */
    public function gallery()
    {
        $adatPhotos = $this->getImagesFromFolder(
            public_path('assets/images/adat'),
            'assets/images/adat'
        );

        $modernPhotos = $this->getImagesFromFolder(
            public_path('assets/images/modern'),
            'assets/images/modern'
        );

        return view(
            'wedding.gallery',
            compact(
                'adatPhotos',
                'modernPhotos'
            )
        );
    }

    /**
     * Membaca seluruh gambar dalam folder public.
     */
    private function getImagesFromFolder(
        string $folderPath,
        string $publicPath
    ): array {
    
        if (! \Illuminate\Support\Facades\File::exists($folderPath)) {
            return [];
        }
    
        $allowedExtensions = [
            'jpg',
            'jpeg',
            'png',
            'webp',
            'gif',
            'avif',
        ];
    
        return collect(
            \Illuminate\Support\Facades\File::files($folderPath)
        )
            ->filter(function ($file) use ($allowedExtensions) {
    
                return in_array(
                    strtolower($file->getExtension()),
                    $allowedExtensions,
                    true
                );
    
            })
            ->sort(function ($a, $b) {
    
                return strnatcasecmp(
                    $a->getFilename(),
                    $b->getFilename()
                );
    
            })
            ->map(function ($file) use ($publicPath) {
    
                $filename =
                    $file->getFilename();
    
                return [
    
                    'name' => pathinfo(
                        $filename,
                        PATHINFO_FILENAME
                    ),
    
                    'filename' =>
                        $filename,
    
                    'url' =>
                        asset(
                            $publicPath
                            . '/'
                            . rawurlencode(
                                $filename
                            )
                        ),
    
                ];
    
            })
            ->values()
            ->toArray();
    }
}
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RsvpAdminBasicAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $expectedUser = (string) config('wedding.admin.user');
        $expectedPass = (string) config('wedding.admin.password');

        $user = (string) $request->getUser();
        $pass = (string) $request->getPassword();

        if ($expectedUser === '' || $expectedPass === '' ||
            ! hash_equals($expectedUser, $user) ||
            ! hash_equals($expectedPass, $pass)) {
            return response('Unauthorized', 401, [
                'WWW-Authenticate' => 'Basic realm="Fajar & Ranti RSVP Admin"',
            ]);
        }

        return $next($request);
    }
}

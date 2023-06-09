<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Memeriksa apakah pengguna terautentikasi
        if (!auth()->check()) {
            abort(403);
        }

        // Memeriksa apakah pengguna memiliki peran yang sesuai
        $user = auth()->user();
        foreach ($roles as $role) {
            if ($user->tipe_akun === $role) {
                return $next($request);
            }
        }

        abort(403);
    }
}

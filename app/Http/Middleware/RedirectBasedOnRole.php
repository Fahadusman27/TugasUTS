<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
{
    // Pastikan pengguna sudah login
    if (Auth::check()) {
        $user = Auth::user();

        // Jika pengguna admin, jangan redirect lagi jika sudah di /dashboard
        if ($user->role === 'admin' && $request->path() !== 'dashboard') {
            return redirect('/dashboard');
        }

        // Jika pengguna mhs, jangan redirect lagi jika sudah di /
        if ($user->role === 'mhs' && $request->path() !== '/') {
            return redirect('/');
        }
    }

    return $next($request);
}

}

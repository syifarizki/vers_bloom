<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna telah login dan memiliki is_admin == 1
        if (auth()->check() && auth()->user()->is_admin == 1) {
            return $next($request);
        }

        // Jika tidak, arahkan ke halaman lain (misalnya, halaman beranda)
        return redirect('/');
    }
}









?>
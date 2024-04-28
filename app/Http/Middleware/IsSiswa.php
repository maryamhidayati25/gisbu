<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsSiswa
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
        if (auth()->user()->is_siswa == 1) {
            return $next($request);
        }
        return back()->with('errors', "Anda Tidak Bisa Mengakses Halaman ini !!");
    }
}

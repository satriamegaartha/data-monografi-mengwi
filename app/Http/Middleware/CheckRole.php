<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // ... itu maksudnya banyak parameter
        // $role dikirim dari route, yaitu admin, siswa

        // ini 1 parameter
        // if ($request->user()->role == $roles) {
        // aplikasi boleh dilanjutkan
        // return $next($request);
        // }



        // ini > 1 parameter
        // dd($request->user());
        if (in_array($request->user()->role, $roles)) {
            // aplikasi boleh dilanjutkan
            return $next($request);
        }

        return redirect('/');

        // middleware diregistrasi di app\http\kernel.php
        // nama yg di kernel yg dipakai untuk di route
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        if(Auth::user()->role == 'admin') {
            return Redirect::to('admin.dashboardAdmin');
        } elseif (Auth::user()->role == 'siswa') {
            return Redirect::to(beranda);
        }
        abort(403);
        //     return redirect('/');
 
    }
}

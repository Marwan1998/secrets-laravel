<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $req
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $req, Closure $next)
    {
        if (session()->has('name') && session()->get('access')) {
            // return view('home', ['name' => session('name')]);
            return $next($req);
        } else {
            if ($req->server('REQUEST_URI') ==='/') {
                return redirect('/login');
            }
            return redirect('/unautorizedaccess');
        }
    }
}

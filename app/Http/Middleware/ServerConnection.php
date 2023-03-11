<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Redirect;
use Session;

class ServerConnection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if( ! Session::has('server-connection') ) {
            return Redirect::route('dashboard');
        }

        return $next($request);
    }
}

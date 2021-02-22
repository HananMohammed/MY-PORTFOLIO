<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Cart
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
        if ( Auth::check() )
        {
            return $next($request);
        }
        if (!empty(session()->get('error')))
            $request->session()->forget('error');


        $request->session()->put('error', __('front.login-first'));

        return redirect('/');
    }
}

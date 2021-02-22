<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CompleteCheckout
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
        if (session()->get('cart')->totalQuantity > 0)
        {
            return $next($request);
        }
        if (!empty(session()->get('error')))
            $request->session()->forget('error');

        $request->session()->put('error', __('No Items Added Yet , Please Add Items To Complete Checkout'));

        return redirect('/');
    }
}

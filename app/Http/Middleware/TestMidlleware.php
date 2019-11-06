<?php

namespace App\Http\Middleware;

use Closure;

class TestMidlleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $date  = Now()->format('s');
        //dd($date);
        if ($date % 2) {   
        return $next($request);
        }
        return response('Not Found 404 !');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;

class filtraHira
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $gato)
    {

        echo($request->route()->parameters()['gato']);

        if ($gato == 'hira') { echo 'ok achei o hira';
            return redirect('home');
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\Configuration;

class MaintenanceMode
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
        $config = Configuration::find(1)->value;
        if($config == "off"){
          return $next($request);
        }else{
          return redirect ('maintenance');
        }


    }


}

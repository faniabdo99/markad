<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

class SecureRequests{
    public function handle($request, Closure $next){
            if (!$request->secure() && App::environment() === 'production') {
                return redirect()->secure($request->getRequestUri());
            }else{
                return $next($request); 
            }
    }
}

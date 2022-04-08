<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\LogAcesso;

class LogAcessoMiddleware 
{
    /**
     * 
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle( $request, Closure $next)
    {
       
        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        LogAcesso::create(['log' => "Ip $ip rquisitou a rota $rota"]);
        return $next($request);
    }
}

<?php

namespace CSilabo\Http\Middleware;

use Closure;

use DB;
use Illuminate\Support\Facades\Auth;
class DelegadoMiddleware
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
        if (Auth::check()) {
          $var = (boolean)DB::table('persona_role')
                  ->join('roles','roles.id','persona_role.role_id')
                  ->where('persona_role.persona_id','=',Auth::user()->id)
                  ->where('roles.nombre','=','Delegado')
                  ->first();
          if ($var) {
            return $next($request);
          }
        }
        return redirect('home');
    }
}

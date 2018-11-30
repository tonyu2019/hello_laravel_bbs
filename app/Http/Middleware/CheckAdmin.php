<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class CheckAdmin
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
        //访问者如果不是超管或普管则跳转到前台首页
        if (Auth::user()->hasAnyRole(['Founder','Maintainer'])){
            return $next($request);
        }
        return redirect('/');
    }
}

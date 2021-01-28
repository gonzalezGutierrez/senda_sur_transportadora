<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministacionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    const IS_USER_ADMIN = true;

    public function handle(Request $request, Closure $next)
    {

        $user = Auth::user()->isUserAdmin();

        if ($user == self::IS_USER_ADMIN)
        {
            return $next($request);
        }

        return redirect('/');



    }
}

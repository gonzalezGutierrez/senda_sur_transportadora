<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class ValidateNotExistOneUserAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    const EXIST = true;
    public function handle(Request $request, Closure $next)
    {

        $user = new User();

        $existOneUserAdmin = $user->existOneUserAdmin();

        if ($existOneUserAdmin == self::EXIST) {
            return redirect('/');
        }

        return $next($request);
    }
}

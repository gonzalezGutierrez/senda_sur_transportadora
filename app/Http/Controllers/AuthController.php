<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class AuthController extends Controller
{

    public function form()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = new User();
        $existUser = $user->findBy('email',$request->email)->first();

        $auth = false;

        if ($existUser)
            if (Hash::check($request->password, $existUser->password) && $existUser->verify_account == 1 && $existUser->status == 0)
                $auth = true;

        if ($auth) {
            Auth::loginUsingId($existUser->id);
        }else{
            return back()->withErrors(['email'=>trans('auth.failed')])->withInput(['email'=>$request->email]);
        }

        if (Auth::user()->isUserAdmin()) {
            return redirect('/administracion');
        }

        return redirect('/');
    }

}

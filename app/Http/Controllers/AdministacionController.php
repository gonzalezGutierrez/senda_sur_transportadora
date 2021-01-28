<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('validate.not.exist.admin.middleware')->only(['create']);
    }

    /**********************************************************************************
     *************FORMULARIO PARA CREAR UN NUEVO ADMINISTRADOR*************************
     **********************************************************************************/
    public function create()
    {
        return view('administracion.welcome');
    }

    /**********************************************************************************
     ************* CREACIÓN DE UN NUEVO ADMINISTRADOR*************************
     **********************************************************************************/
    public function store(Request $request)
    {
        try {

            $user = new User();

            $user->email = $request->email;
            $user->password = $request->password;

            $user->fullname = $request->fullname;
            $user->phone = $request->phone;

            $user->rol_id = 1;
            $user->verify_account = 1;

            $user->status = 0;

            $user->save();

            Auth::loginUsingId($user->id);


            return redirect('administracion');

        }catch (\Exception $exception) {
            dd($exception);
        }
    }

    /**********************************************************************************
     ************* MENU DE ADMINISTRACIÓN DEL SISTEMA  ********************************
     **********************************************************************************/

    public function home()
    {
        return view('administracion.home');
    }

}

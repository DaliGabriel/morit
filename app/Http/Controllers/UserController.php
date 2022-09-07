<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show register and create form
    public function create(){
        return view('users.register');
    }

    //Create new user
    public function store(){
        $formFields = request()->validate([
            'name' => 'required | min:3',
            'email' => 'required | email | unique:users',
            'password' => 'required | confirmed | min:6'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect('/')->with('message', 'Usuario creado y agregado existosamente');
    }

    //Logout User
    public  function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('message_delete', 'Haz cerrado la sesion');
    }

    //Show login form
    public  function login(){

        return view('users.login');

    }

    //Authenticate User
    public  function authenticate(){

        $formFields = request()->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)){

            request()->session()->regenerate();

            return redirect('/')->with('message','Estas Adentro!!!');

        }

        return back()->withErrors(['email'=>'Credenciales Incorrectas!!! :('])->onlyInput('email');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        //if(auth()-> attempt(request(['email','password'])) == false) {
        //    return back()->withErrors([
        //        'message'=> '*Usuario y/o contraseña no válidos'
        //    ]);
        //}

        //rules
        $credentials=$request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        
        $remember = $request->filled('remember');
        if(Auth::attempt($credentials,false)){
            $request->session()->regenerate();
            return redirect()->to('/');
        }
        
        throw ValidationException::withMessages([
            'message'=> '*Correo y/o contraseña no válidos'
        ]);
        
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}

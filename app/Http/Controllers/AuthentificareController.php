<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthentificareController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function authentificate(Request $request){
        $credentials = $request->validate([
            'name'=> ['required'],
            'password'=> ['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
        }

        dd("fails");
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}

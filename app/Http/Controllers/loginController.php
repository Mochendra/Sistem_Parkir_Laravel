<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

//use Illuminate\support\Facades\DB;

class loginController extends Controller{

    public function index()
    {
            return view('login',['title' => ' login', 'active' => 'login']);
    }

    public function authenticate(Request $request){

        $credentials = $request -> validate ([
        'user_name' => 'required',
        'password' => 'required' 
    ]);
    
    if (Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/petugas');
    }
    return back ()->with('loginError','Login Failed');
  //dd('berhasil');    
}

    public function logout(request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


}
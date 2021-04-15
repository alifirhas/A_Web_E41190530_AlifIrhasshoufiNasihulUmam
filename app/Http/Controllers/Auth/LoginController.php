<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        //validasi data
        $this->validate($request, [
            // 'email' => 'required|email|max:100',
            'username' => 'required|max:100',
            'password' => 'required|max:15',
        ]);
        
        //masukkan user
        auth()->attempt($request->only('username', 'password'));

        //kembalikan ke landing page
        return redirect()->route('landing');
    }
}

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
        $credential = auth()->attempt($request->only('username', 'password'));
        if(!$credential){
            return back()->with('status', 'invalid login details');
        };

        $roles = auth()->user()->roles;
        // dd($roles);
        //kembalikan ke landing page
        if ($roles == 1 || $roles == 0) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('landing');
    }
}

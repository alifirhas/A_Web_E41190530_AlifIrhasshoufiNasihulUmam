<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('user.register');
    }

    public function store(Request $request){

        //validasi data
        $this->validate($request, [
            'name' => 'required|max:100',
            'username' => 'required|max:100',
            'email' => 'required|email|max:100',
            'password' => 'required|confirmed|max:15',
        ]);
        
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        //ostosmastis masukkan user
        auth()->attempt($request->only('email', 'password'));

        //kembalikan ke landing page
        return redirect()->route('landing');

    }
}

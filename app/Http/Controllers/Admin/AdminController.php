<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){

        return view('admin.dashboard');

    }
    public function users(){
        $user = User::get();

        return view('admin.users', [
            'users' => $user,
        ]);

        // return view('admin.users');
    }
}

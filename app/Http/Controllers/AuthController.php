<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('pages.dashboardAdmin.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['name'=>$request->name, 'password'=>$request->password])){
            return redirect('/admin/prestasi');
        }
            return redirect('/login')->with('message', 'Email atau Password salah!');
    }
    public function logout() 
    {
        Auth::logout();
        return redirect('/login');
    }
}

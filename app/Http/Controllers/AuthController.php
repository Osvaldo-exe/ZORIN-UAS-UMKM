<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


class AuthController extends Controller
{
    function login(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' =>  $request->password
        ];

        if (Auth::attempt($infologin)) {
            Session::put('name', Auth::user()->name);
            return redirect('admin')->with('success', 'Selamat datang, Admin');
        } 
        else {
            return back()->with('error', 'Email atau password salah');
        }
    }

    // Bagian Review
    function Review(){
        return ('Sementara ini dulu');
    }
}
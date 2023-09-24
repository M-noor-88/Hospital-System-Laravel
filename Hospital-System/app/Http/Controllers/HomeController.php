<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {
            if(Auth::user()->userType == '0') {
                return view('user.home');
            }
            else {
                return view('admin.home');
            }
        }
    }

    public function index() {
        return view('user.home');
    }


    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/home'); // Redirect to the desired page after logout
    // }
}

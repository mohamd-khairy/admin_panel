<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function home()
    {
        $data = [];

        return view('admin.index' , compact('data'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function do_login(Request $request)
    {

        $data = $request->only('email' , 'password');

        if(Auth::attempt($data)){
            return redirect('admin');
        }else{
            return back()->with('errors' , ['some thing wrong']);
        }
    }

    public function do_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

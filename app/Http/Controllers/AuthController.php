<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'Admin') {
                return redirect()->intended('/admin/index');
            }
        }
        return view('auth.login');
    }   

    public function login(Request $request)
    {

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'Admin') {
                    $request->session()->regenerate();
                    return redirect()->intended('/admin/index');
                } 
                return redirect()->session()->regenerate();
            }

        return redirect('login')
                ->withInput()
                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

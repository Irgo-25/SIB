<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login.index', [
            'title_web' => 'Login'
        ]);
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        // Pengecekan ke DB dengan Auth
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('Dashboard')->withtoast_info('Selamat Datang di App Inventory', 'autoClose(3000)');
        }else{
            return back()->withtoast_error('Username atau Password Salah', 'autoClose(3000)');
        }

    }
    public function logout(Request $request):RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kontak;
use App\Models\Mitra;

class admin extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('cred.login');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    //dashboard
    public function dashboard(){
        if(Auth::check()&& Auth::user()->role === 'admin'){
            $jumlah_kontak = Kontak::count();
            $jumlah_mitra = mitra::count();
            return view('admin.dashboard', compact('jumlah_kontak', 'jumlah_mitra'));
        }
        return redirect('/');
           
        }

        // Proses login
        public function postLogin(Request $request){
            $credentials = $request->validate([
                'username'=>['required'],
                'password'=>['required']
            ]);

            if(Auth::attempt($credentials)){
                $user = Auth::user();
                if($user->role === 'admin'){
                    $request->session()->regenerate();
                    return redirect()->intended('admin/dashboard');
                }else{
                    Auth::logout();
                    return back()->withErrors([
                        'username'=> 'Error'
                    ]);
                }
            }

            return back()->withErrors([
                'username'=>'Error'
            ]);
        }
}

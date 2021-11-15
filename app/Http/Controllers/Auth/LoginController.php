<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Menampilkan view login
     */
    public function show() {
        return view('auth.login');
    }

    /**
     * Handle login
     */
    public function authenticate() {
        
        /**
         * Pengecekan email dan password
         */
        $status = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ]);
        
        /**
         * Jika email dan password benar
         */
         if ($status === true) {

            $user = Auth::user();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.page');
            }

            if ($user->hasRole('penjual')) {
                return redirect()->route('penjual.page');
            }

            if ($user->hasRole('pembeli')) {
                return redirect()->route('pembeli.page');
            }

            return redirect()->route('welcome');
        }
        
        /**
         * Jika email dan password salah
         */
        else {
            return redirect()->route('login.show');
        }
    }


}

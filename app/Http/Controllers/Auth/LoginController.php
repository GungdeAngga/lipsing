<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        // Validate the credentials
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard/about'); // Redirect to the intended page
        }

        // Authentication failed
        return back()->withErrors([
            'username' => 'Username atau Password salah',
        ]);
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Optional: Override authenticated method if needed
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended('/dashboard/about');
    }
}

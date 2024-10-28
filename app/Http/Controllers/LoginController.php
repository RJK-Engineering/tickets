<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }
        return new UserResource(Auth::getUser());
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request): RedirectResponse
    {
        // from https://laravel.com/docs/11.x/authentication
        // doesnt work
        // Auth::logout();
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }

    public function user(Request $request)
    {
        error_log("Auth::user()");
        error_log(Auth::user());
        dd(Auth::user());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request) : UserResource
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // TODO session stuff needed?
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }
        return new UserResource(Auth::getUser());
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        // TODO session stuff needed?
        $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return (new JsonResponse)->cookie(self::COOKIE_NAME);
    }

    public function user(Request $request) : UserResource
    {
        // dd(Auth::user());
        return new UserResource(Auth::getUser());
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function loginIndex(Request $request)
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $this->validate(
            $request,
            array(
                'username' => ['required', 'string'],
                'password' => ['required', 'string'],
                // 'g-recaptcha-response' => 'recaptcha',
            )
        );

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            flash()->addSuccess('Login Success !');
            return redirect('/');
        } else {
            flash()->addError('Invalid Input !');
            return redirect('/');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        flash()->addSuccess('User logout Success !');
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function doLogin(Request $request) {
        $validate = Validator::make($request->all(), [
           'email' => 'required',
           'password' => 'required'
        ]);

        if ($validate->fails()) return back()->withInput()->with('error', 'Invalid Credentials Input');
        $data = [ 'email' => strtolower($request->input('email')), 'password' => $request->input('password') ];
        if (!Auth::validate($data)) return back()->withInput()->with('error', 'Invalid Credentials');

        return redirect()->intended('/dashboard');
    }

    public function doRegister(Request $request) {
        $validate = Validator::make($request->all(), [
           'email' => 'required',
           'password' => 'required'
        ]);

        if ($validate->fails()) return back()->withInput()->with('error', 'Invalid Input');
        $user = User::all()->find('email', strtolower($request->input('email')));
        dd($user);
    }

}

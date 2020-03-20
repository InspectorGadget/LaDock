<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{ Auth, Hash, Validator };

class AuthController extends Controller
{

    public function doLogin(Request $request) {
        $validate = Validator::make($request->all(), [
           'email' => 'required',
           'pass' => 'required'
        ]);

        if ($validate->fails()) return back()->withInput()->with('error', 'Invalid Credentials Input');
        $data = [ 'email' => strtolower($request->input('email')), 'password' => $request->input('pass') ];
        if (!Auth::attempt($data)) return back()->withInput()->with('error', 'Invalid Credentials');

        return redirect(route('dashboard'));
    }

    public function doRegister(Request $request) {
        $validate = Validator::make($request->all(), [
           'email' => 'required',
           'pass' => 'required'
        ]);

        if ($validate->fails()) return back()->withInput()->with('error', 'Invalid Input');
        $count = User::all()->where('email', strtolower($request->input('email')));
        if (count($count) > 0) return back()->with('error', 'A user with this Email exists!');

        try {
            $user = new User();
            $user->email = strtolower($request->input('email'));
            $user->password = Hash::make($request->input('pass'));
            $user->save();
        } catch (\Exception $exception) {
            return dd($exception->getMessage());
        }

        return redirect(route('login'))->with('message', 'You have been successfully registered!');
    }

}

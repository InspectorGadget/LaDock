<?php

namespace App\Http\Controllers\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{

    public function showLanding() {
        return view('landing.index');
    }

    public function showLogin() {
        return "Login";
    }

    public function showRegister() {
        return "Register";
    }

}

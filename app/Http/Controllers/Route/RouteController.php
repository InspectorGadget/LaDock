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
        return view('login.index');
    }

    public function showRegister() {
        return view('register.index');
    }

    public function showDashboard() {
        return view('dashboard.index');
    }

}

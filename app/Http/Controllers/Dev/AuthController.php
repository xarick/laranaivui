<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function login()
    {
        return Inertia::render('Dev/Auth/Login');
    }

    public function loginpost(Request $request)
    {
        dd($request->all());
        return Redirect::route('dev.login');
    }

    public function register()
    {
        return Inertia::render('Dev/Auth/Register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminLoginController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }
}

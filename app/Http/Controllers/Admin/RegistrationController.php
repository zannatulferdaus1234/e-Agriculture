<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('admin.auth.register');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function forgot()
    {
        return view('admin.auth.forgot-password');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginAdmin()
    {
        return view('login-admin');
    }

    public function loginAttempt(Request $request)
    {
        if ($request->email == 'institution@institution.com' && $request->password == 'institution123') {
            return redirect('institution');
        }
        return view('login');
    }

    public function loginAttemptAdmin(Request $request)
    {
        if ($request->email == 'admin@admin.com' && $request->password == 'admin123') {
            return redirect('admin');
        }
        return view('login-admin');
    }
}

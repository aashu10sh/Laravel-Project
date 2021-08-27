<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return view('form.form');
    }


    protected function login(Request $request)
    {
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $confirm_password = $request->confirm_password;
        if ($password != $confirm_password)
            {
                echo "Passwords Do Not Match";
            }
        else
        {
            return view('form.dashboard', compact('username'));
        }
    }

    protected function send_back(Request $request)
    {
        return redirect('/form');
    }
}



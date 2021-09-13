<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            DB::table('registers')->insert([
                'username'=>$username,
                'email' => $email,
                'password'=> $password,
                'created_at'=> Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);

        }
    }
    public function indexd()
    {
        $users = DB::table('registers')->get();
        return view('users', compact('users'));
    }

    protected function send_back(Request $request)
    {
        return redirect('/form');
    }
}



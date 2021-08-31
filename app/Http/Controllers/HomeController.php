<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Http\UploadedFile;
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
        $photo = $request->file('photo');
        if ($password != $confirm_password)
            {
                echo "Passwords Do Not Match";
            }
        else
        {
//            echo  $photo->getClientOriginalExtension();
//            echo json_encode($photo->getClientOriginalExtension() != 'jpeg');
            if ($photo->getClientOriginalExtension() != 'jpeg' and $photo->getClientOriginalExtension() !='png')
            {
                echo "Cannot Accept Image ";
            }
            else{
                $path = $request->photo->storeAs('public/images',"tesla.jpeg");
                $path = "storage/images/tesla.jpeg";
                return view('form.dashboard', compact('username','email','password','confirm_password','path'));
            }


        }
    }

    protected function send_back(Request $request)
    {
        return redirect('/form');
    }
}



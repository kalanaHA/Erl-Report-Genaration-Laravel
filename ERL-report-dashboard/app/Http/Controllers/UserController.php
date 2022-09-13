<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user_login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ],
        [
            "email.required" => "Email address field is Required",
            "password.required" => "Password field is Required"
        ]);
        $userData = DB::table('users')->where("email","=", $request->email)->first();
        // dd($userData);

        if($userData){
            $isMatch = Hash::check($request->password, $userData->password);
            if($isMatch){
                return redirect("/dashboard");
            }else{
              return back()->with('fail',"Incorrect password !");
            }
        }else{
            return back()->with('fail',"Email address not found !");
        }
    }
}

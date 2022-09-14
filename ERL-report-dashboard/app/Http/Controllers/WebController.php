<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{

      public function dashboard_view()
    {
        return view('dashboard');
    }

    public function login()
    {
          return view('user_account.login');
    }

    public function report_one(){
        $Provinces = DB::select("SELECT * FROM province;");
        $License_Status = DB::select("SELECT * FROM license_status");
        return view('report_one', compact('Provinces', 'License_Status'));
    }

    public function report_three(){
        $License_Status = DB::select("SELECT * FROM license_status");
        return view('report_three',compact('License_Status'));
    }

    public function report_four(){
        $License_Status = DB::select("SELECT * FROM license_status");
        return view('report_four',compact('License_Status'));
    }

    public function report_two(){

            $Provinces = DB::select("SELECT * FROM province");
            $License_Type = DB::select("SELECT * FROM license_type");
            $License_Status = DB::select("SELECT * FROM license_status");
            return view('report_two', compact('License_Type', 'License_Status','Provinces'));

    }

}

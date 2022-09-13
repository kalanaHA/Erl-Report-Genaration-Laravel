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
        return view('report_one');
    }
}

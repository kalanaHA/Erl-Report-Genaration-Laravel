<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Encryption\DecryptException;
use File;
use Response;
use Exception;

class ReportTwoController extends Controller
{
    public function report_two_data(Request $request)
    {
        // dd($request);
        $monthtemp = (int)substr($request->start_date, 5);
        if($monthtemp == 12){
            $yeartemp = ((int)substr($request->start_date, 0,4)) +1;
            $enddate = $yeartemp."-01";

        }else {
            $tempyear = substr($request->start_date, 0,4);
            $enddate = $tempyear."-".($monthtemp+1);
        }


         $ReportTwoData = DB::select("SELECT
         IFNULL(Modified_Time, Created_Time) AS Date,
         license_status.description,
         license_type.Description,
         License_No,
         Vehicle_Reg_No,
         (License_Amount + Fine) AS Total_Amount,
         License_Issued_Date,
         License_Expiry_Date,
         user.User_Name,
         authority.Authority
     FROM
         erl_central_dbase.rev_license_record
             LEFT JOIN
         erl_central_dbase.user ON rev_license_record.Created_User_ID = user.User_ID
             LEFT JOIN
         erl_central_dbase.license_type ON rev_license_record.License_Type_ID = license_type.License_Type_ID
             LEFT JOIN
         erl_central_dbase.license_status ON rev_license_record.License_Status_ID = license_status.License_Status_ID
             LEFT JOIN
         erl_central_dbase.authority ON rev_license_record.Authority_ID = authority.Authority_ID
     WHERE
         rev_license_record.province_id = '$request->province'
             AND (Created_Time BETWEEN '$request->start_date-01' AND '$enddate-01')
             AND (rev_license_record.License_Type_ID ='$request->license_type'
             OR rev_license_record.License_Status_ID = '$request->license_status')");


        // dd($ReportTwoData);
        return back()->with(compact('ReportTwoData'));

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportOneController extends Controller
{
    public function report_one_data(Request $request){
        $request->validate([
            'province' => 'required',
            'license_status' => 'required',
            'date' => 'required',
        ]);

        $Provinces = DB::select("SELECT * FROM province;");
        $License_Status = DB::select("SELECT * FROM license_status");

        $quary = "SELECT
        rlr.province_id,
        p.Province,
        rlr.Issuing_Authority_id,
        a.Authority,
        COUNT(rlr.License_ID) Count_License_ID,
        SUM(License_Amount) License_Amount,
        SUM(Arrears) Arrears,
        SUM(Fine) Fine
    FROM
        erl_central_dbase.rev_license_record rlr
            INNER JOIN
        erl_central_dbase.vehicle v ON v.Vehicle_Reg_No = rlr.Vehicle_Reg_No
            INNER JOIN
        erl_central_dbase.vehicle_class vc ON vc.Vehicle_Class_ID = v.Vehicle_Class_ID
            INNER JOIN
        erl_central_dbase.authority a ON a.Authority_ID = rlr.Authority_ID
            INNER JOIN
        erl_central_dbase.province p ON p.Province_ID = rlr.province_id
    WHERE
        rlr.Entered_Date LIKE '$request->date%'
            AND rlr.License_Status_ID = $request->license_status
            AND rlr.province_id = $request->province
    GROUP BY rlr.province_id , rlr.Issuing_Authority_id
    ORDER BY rlr.province_id , rlr.Issuing_Authority_id;";


        $results = DB::select($quary);

        if($results){
            return back()->with('results', $results)->withInput();
            // return view("report_one_result")->with(compact('results'));

        }else{
            return back()->with("status" , "No data Found")->withInput();
        }





    }
}

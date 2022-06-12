<?php

namespace App\Http\Controllers\Admin\Orders_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteOrdersController extends Controller
{
   // Complete View
    function completeViewData(){
        //fetch user data from database
        $data = DB::table('appointment')->where('order_status', 'Delivered')->count();

        if ($data<=0) {
            $data = false;
            $AppointmentData=[];
        }else{
            $data = true;
            $AppointmentData = DB::table('appointment')
                        ->leftJoin('user_profile', 'appointment.user_id', '=', 'user_profile.uid')
                        ->leftJoin('user_address', 'appointment.user_id', '=', 'user_address.user_id')
                        ->leftJoin('user_body_measurements', 'appointment.user_id', '=', 'user_body_measurements.user_id')
                        ->where('order_status', 'Delivered')
                        ->orderBy('order_date', 'asc')
                        ->orderBy('order_time', 'asc')
                        ->paginate(6);
        }
        return view('admin.order_pages.appointment.appointment-complete', ['AppointmentData'=>$AppointmentData, 'data'=>$data]);
    }
}

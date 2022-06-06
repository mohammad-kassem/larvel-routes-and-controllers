<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TimeController extends Controller{
    public function countSeconds(){
        $date_now = strtotime("now");
        $date_old = strtotime("14 April 1732");
        $date_diff = $date_now - $date_old;
        return response()->json([
            "status" => "Success",
            "seconds-passed" => $date_diff
        ], 200);
    }
}

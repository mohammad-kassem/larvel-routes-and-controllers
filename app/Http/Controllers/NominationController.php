<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NominationController extends Controller{
    public function generateNomination(){
        $students_array = ['sara', 'ali', 'joe', 'mariam', 'pablo', "iman"];
        $n = sizeof($students_array);
        $nominated = "";
        for ($i = 0; $i <= 5; $i++) {
            $random_student = rand(0, $n - 1);
            if ($students_array[$random_student] === 'pablo'){
                break;
            }
        }
        return response()->json([
            "status" => "Success",
            "nominated" => $students_array[$random_student]
        ], 200);
    }
}

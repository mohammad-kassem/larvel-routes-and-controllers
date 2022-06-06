<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TeamsController extends Controller{
    public function generateTeams(){
        $students_array = ['sara', 'ali', 'joe', 'mariam', 'pablo'];
        $n = sizeof($students_array);
        $teams_array = array_chunk($students_array, 2);
        return response()->json([
            "status" => "Success",
            "teams" => $teams_array
        ], 200);
    }
}
        
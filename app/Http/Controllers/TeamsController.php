<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TeamsController extends Controller{
    public function generateTeams(){
        $students_array = ['sara', 'ali', 'joe', 'mariam', 'pablo', "iman"];
        $n = sizeof($students_array);
        $team = [];
        $teams_array = [];
        $assigned_indices = [];
        // $teams_counter = 0;
        while (count($teams_array, COUNT_RECURSIVE)  < $n){
            $random_student = rand(0, $n - 1);
            if (!in_array($random_student, $assigned_indices)){
                array_push($team, $students_array[$random_student]);
                // echo json_encode(sizeof($teams_array,1));
                array_push($assigned_indices, $random_student);
                if (sizeof($team) === 2){
                    array_push($teams_array, $team);
                    $team = [];
                // if (sizeof($assigned_indices) % 2 == 0){
                //     $teams_counter++;
                // }
            }

        }
    }
        
        if ($team !== []){
            array_push($teams_array, $team); 
        }
        return response()->json([
            "status" => "Success",
            "teams" => $teams_array
        ], 200);
    }
}
        
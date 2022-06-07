<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AssignmentController extends Controller{
    public function countPalindromes(){
        $count = 0;
        $words_array = ['rar', 'mom', 'remote', 'dad', 'mobile'];
        foreach($words_array as $item){
            if ($item === strrev($item)){
                $count++;
            }; 
        }
        return response()->json([
            "status" => "Success",
            "palindrome-count" => $count
        ], 200);
    }

    public function countSeconds(){
        $date_now = strtotime("now");
        $date_old = strtotime("14 April 1732");
        $date_diff = $date_now - $date_old;
        return response()->json([
            "status" => "Success",
            "seconds-passed" => $date_diff
        ], 200);
    }

    public function displayText(){
        $request = Http::get('https://icanhazdadjoke.com/slack')['attachments'];
        return response()->json([
            "status" => "Success",
            "text" => $request[0]['text']
        ], 200);
    }

    public function getRandomRecipe(){
        $beer_recipes_array = Http::get('https://api.punkapi.com/v2/beers');
        $n = sizeof(json_decode($beer_recipes_array));
        $random_index = rand(0, $n-1);
        return response()->json([
            "status" => "Success",
            "beer-recipe" => $beer_recipes_array[$random_index]
        ], 200);
    }

    public function generateTeams(){
        $students_array = ['sara', 'ali', 'joe', 'mariam', 'pablo'];
        $n = sizeof($students_array);
        $teams_array = array_chunk($students_array, 2);
        return response()->json([
            "status" => "Success",
            "teams" => $teams_array
        ], 200);
    }

    public function generateNomination(){
        $students_array = ['sara', 'ali', 'joe', 'mariam', 'pablo'];
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

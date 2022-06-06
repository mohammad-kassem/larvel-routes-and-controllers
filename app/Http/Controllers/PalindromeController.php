<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PalindromeController extends Controller{
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
}
<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DisplayTextController extends Controller{
    public function displayText(){
        $request = Http::get('https://icanhazdadjoke.com/slack')['attachments'];
        return response()->json([
            "status" => "Success",
            "text" => $request[0]['text']
        ], 200);
        // return $request[0]['text'];
    }
}


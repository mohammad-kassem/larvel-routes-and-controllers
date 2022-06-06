<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BeerRecipeController extends Controller{
    public function getRandomRecipe(){
        $beer_recipes_array = Http::get('https://api.punkapi.com/v2/beers');
        $n = sizeof(json_decode($beer_recipes_array));
        $random_index = rand(0, $n-1);
        return response()->json([
            "status" => "Success",
            "beer-recipe" => $beer_recipes_array[$random_index]
        ], 200);
    }
}

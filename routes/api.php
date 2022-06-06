<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\DisplayTextController;
use App\Http\Controllers\BeerRecipeController;
use App\Http\Controllers\TeamsController;






Route::get('/count-palindromes', [PalindromeController::class, 'countPalindromes'])->name("count-palindromes");
Route::get('/count-seconds', [TimeController::class, 'countSeconds'])->name("count-seconds");
Route::get('/display-text', [DisplayTextController::class, 'displayText'])->name("display-text");
Route::get('/beer-recipe', [BeerRecipeController::class, 'getRandomRecipe'])->name("random-recipe");
Route::get('/generate-teams', [TeamsController::class, 'generateTeams'])->name("genrate-teams");
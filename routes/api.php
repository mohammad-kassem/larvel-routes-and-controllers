<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentController;







Route::get('/palindromes_count', [AssignmentController::class, 'countPalindromes'])->name("palindromes_count");
Route::get('/seconds', [AssignmentController::class, 'countSeconds'])->name("seconds");
Route::get('/joke', [AssignmentController::class, 'displayText'])->name("joke");
Route::get('/beer_recipe', [AssignmentController::class, 'getRandomRecipe'])->name("beer_recipe");
Route::get('/teams', [AssignmentController::class, 'generateTeams'])->name("teams");
Route::get('/nomination', [AssignmentController::class, 'generateNomination'])->name("nomination");
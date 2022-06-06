<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\TimeController;



Route::get('/count-palindromes', [PalindromeController::class, 'countPalindromes'])->name("count-palindromes");
Route::get('/count-seconds', [TimeController::class, 'countSeconds'])->name("count-seconds");
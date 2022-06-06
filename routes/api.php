<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PalindromeController;


Route::get('/count-palindromes', [PalindromeController::class, 'countPalindromes'])->name("count-palindromes");
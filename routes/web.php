<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpensesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('expenses', ExpensesController::class);

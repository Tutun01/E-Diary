<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $grades = \App\Models\Grades::all();
    return view('welcome', compact('grades'));
});

Route::view("/add-grade", "addGrade");

Route::post("/add-user-grade", [\App\Http\Controllers\GradesController::class, 'enterTheGrade'] );

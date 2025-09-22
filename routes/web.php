<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/Project");
}); 
 
Route::resource("/Project", "App\Http\Controllers\ProjectController");


<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::resource('task', TaskController::class);
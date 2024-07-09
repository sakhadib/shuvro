<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home_Controller;
use App\Http\Controllers\other_controller;

Route::get('/', [home_Controller::class, 'index']);

Route::get('/experiences', [other_controller::class, 'experiences']);
Route::get('/projects', [other_controller::class, 'projects']);

Route::get('/cv', [other_controller::class, 'cv']);

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home_Controller;

Route::get('/', [home_Controller::class, 'index']);

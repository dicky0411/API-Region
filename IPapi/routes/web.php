<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IPController;

Route::get('/region/{ip?}', [IPController::class, 'getIpRegion'])->name('ip.region');

Route::get('/', function () {
    return view('welcome');
});

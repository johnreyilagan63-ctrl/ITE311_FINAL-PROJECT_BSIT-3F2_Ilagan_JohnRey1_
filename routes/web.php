<?php

use Illuminate\Support\Facades\Route;
use App\Models\SiteSetting;

Route::get('/', function () {
    $setting = SiteSetting::first();

    return view('welcome', compact('setting'));
});
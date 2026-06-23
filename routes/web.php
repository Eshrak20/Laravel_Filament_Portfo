<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect('/admin/login');
});
use Illuminate\Support\Facades\Storage;

Route::get('/staff-image/{filename}', function ($filename) {
    $path = storage_path('app/staff/' . $filename);

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->file($path);
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/demo/{name}/{Id}', function($name,$Id) {
    $data =compact('name','Id');
    return view('demo')->with($data);
});
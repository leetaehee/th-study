<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('member.login');
})->name('login');

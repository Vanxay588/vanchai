<?php

Route::redirect('/', '/home');

Route::group([
    'prefix'     => 'home',
    'as'         => 'home.',
    'namespace'  => 'Home',
], function () {
    Route::view('/{any?}', 'layouts.admin.app')->name('home')->where('any', '.*');
});

Route::redirect('/dashboard', '/admin/dashboard');

Auth::routes();

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'namespace'  => 'Admin',
    'middleware' => ['auth'],
], function () {
    Route::view('/{any?}', 'layouts.admin.app')->name('dashboard')->where('any', '.*');
});
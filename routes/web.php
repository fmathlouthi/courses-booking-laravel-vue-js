<?php

Route::redirect('/login', '/login');
Route::redirect('/dashboard', '/admin/dashboard');

//Auth::routes(['register' => false]);
Auth::routes(['verify' => true]);

Route::group([
    'prefix'     => 'admin',
    'as'         => 'admin.',
    'namespace'  => 'Admin',
    'middleware' => ['auth','verified'],
], function () {
    Route::view('/{any?}', 'layouts.admin.app')->name('dashboard')->where('any', '.*');
});
Route::get('/{any}' , function()
{ return view('welcome');}
)->where('any' , '.*');

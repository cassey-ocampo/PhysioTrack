
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::view('/measurements', 'measurements')->name('measurements');

Route::view('/goals', 'goals')->name('goals');

Route::view('/sensors', 'sensors')->name('sensors');

Route::view('/help', 'help')->name('help');

<?php

use App\Http\Controllers\WeaponController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/loadout', function () {
    return view('loadout');
});

Route::get('/add_weapon', function () {
    return view('weapon_create');
});

// Route::get('/weapons', [WeaponController::class, 'index']);

//Route::post('/add/weapon', [WeaponController::class, 'store']);
Route::controller(WeaponController::class)->group(function(){
    Route::get('/loadout', 'index');
    Route::post('/add/weapon', 'store');
    Route::get('/weapon/{weapon}', 'show');
    Route::put('/weapon/{weapon}', 'update');
    Route::delete('/weapon/{weapon}', 'destroy');
    
});

//  Route::put('/add/weapon', [WeaponController::class, 'store']);

 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

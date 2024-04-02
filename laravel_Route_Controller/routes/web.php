<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\First_Controller;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::controller(FirstController::class)->group(function () {
    Route::get('/first', 'coba1');
    Route::get('/first3', 'coba3');
    Route::get('/first4', 'coba4');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard', [FirstController::class, 'dashboard']);
Route::get('/dashboard', [FirstController::class, 'read']);

Route::post('/submit', [FirstController::class, 'submit']);

Route::resource('/coba', FirstController::class);

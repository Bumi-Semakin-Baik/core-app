<?php

use App\Http\Controllers\QrController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cockpit/login', function () {
    $data = [
        'title' => 'login'
    ];
    return view('cockpit/auth/login', $data);
});

Route::get('/cockpit', function () {
    $data = [
        'title' => 'dashboard'
    ];
    return view('cockpit/dashboard', $data);
});

Route::get('/qrcode', [QrController::class, 'index']);
Route::get('/qrcode-convert', [QrController::class, 'convert']);
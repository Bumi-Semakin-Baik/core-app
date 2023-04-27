<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/haloo', function () {
    $c = 3 > 7;
    print_r($c);
    echo "haloo";
});

Route::get('/qrcode', [QrController::class, 'index']);
Route::get('/qrcode-convert', [QrController::class, 'convert']);
// Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });

// Route::controller(AuthController::class)
//     ->group(function (){
//             Route::get('/login','viewLogin');
//             Route::post('/login', 'login')->name('login');
//             // Route::get('/register','viewRegister');
//             // Route::post('/register','register')->name('register');
//         });

Route::prefix('dashboard')
    ->controller(DashboardController::class)
    ->group(function (){
        Route::get('/','index');
    });

Route::prefix('partner')
    ->controller(PartnerController::class)
    ->group(function (){
        Route::get('/','index');
    });

Route::prefix('company')
    ->controller(CompanyController::class)
    ->group(function (){
        Route::get('/accounts','getAccount');
        Route::get('/projects','getProject');
    });
Route::prefix('newsletter')
    ->controller(NewsController::class)
    ->group(function (){
        Route::get('/','index');
        Route::get('/add','add');
        Route::get('/edit','edit');
    });
Route::controller(LandingController::class)
    ->group(function (){
        Route::get('/','index');
    });

Route::controller(AboutController::class)
    ->group(function (){
        Route::get('/about','index');
    });

// Route::post('/logout', function () {
//         auth()->logout();
//         request()->session()->invalidate();
//         request()->session()->regenerateToken();

//         return redirect('/');
//     })->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('', [UserController::class, 'index']);


// Route::controller(RegisterController::class)
//     ->group(function (){
//         Route::get('/register','viewRegister');
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
        Route::get('/','index')->name('news');
        Route::get('/add','add');
        Route::get('/edit','edit');
        Route::post('/store', 'store')->name('store.news');
    });
Route::controller(LandingController::class)
    ->group(function (){
        Route::get('/','index');
    });

Route::controller(AboutController::class)
    ->group(function (){
        Route::get('/about','index');

    });
Route::controller(DonateController::class)
    ->group(function (){
        Route::get('/donate','index');

    });


Auth::routes();

Route::get('/confirm-password', function () {
    return view('login');
    })->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


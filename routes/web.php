<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\UKMController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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

Route::prefix('auth')
    ->controller(LoginController::class)
    ->group(function (){
        Route::get('/login','index');
        Route::get('/register','showRegister');
    });

Route::prefix('company')
    ->controller(CompanyController::class)
    ->group(function (){
        Route::get('/accounts','getAccount')->name('company');
        Route::get('/accounts/add','add')->name('add.company');
        Route::post('/accounts/store','store')->name('store.company');
        Route::get('/accounts/edit/{id}','edit')->name('edit.company');
        Route::put('/accounts/edit/{id}','update')->name('update.company');
        Route::delete('/accounts/{id}','destroy')->name('delete.company');
        Route::get('/projects','getProject');
    });

Route::prefix('donation')
    ->controller(DonationController::class)
    ->group(function (){
        Route::get('/manage','getManage');
        Route::get('/add','add');
        Route::post('/store', 'store')->name('store.donation');
        // Route::delete('/destroy', 'destroy')->name('destroy.donation');
    });
Route::prefix('newsletter')
    ->controller(NewsController::class)
    ->group(function (){
        Route::get('/','index')->name('news');
        Route::get('/add','add');
        Route::get('/edit/{id}','edit')->name('edit.news');
        Route::put('/edit/{id}','update')->name('update.news');
        Route::post('/store', 'store')->name('store.news');
        Route::delete('/{id}','destroy')->name('delete.news');
    });
Route::prefix('ukm')
    ->controller(UKMController::class)
    ->group(function (){
        Route::get('/','index')->name('ukm');
        Route::get('/add','add');
        Route::post('/store', 'store')->name('store.ukm');
        Route::delete('/{id}','destroy')->name('delete.ukm');
        Route::get('/edit/{id}','edit')->name('edit.ukm');
        Route::put('/edit/{id}','update')->name('update.ukm');

    });
Route::controller(LandingController::class)
    ->group(function (){
        Route::get('/','index');
        Route::get('/news/{id}', 'detailNews')->name('detail.news');
    });

Route::controller(AboutController::class)
    ->group(function (){
        Route::get('/about','index');

    });
Route::controller(DonateController::class)
    ->group(function (){
        Route::get('/donate','index');

    });
Route::controller(ArtikelController::class)
    ->group(function (){
        Route::get('/artikel','index');
    });

Auth::routes();

Route::get('/confirm-password', function () {
    return view('login');
    })->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);


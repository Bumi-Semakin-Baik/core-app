<?php

use App\Http\Controllers\QrController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CompanyController;
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
Route::prefix('dashboard')
    ->controller(DashboardController::class)
    ->group(function (){
        Route::get('/','index');
    });
Route::prefix('newsletter')
    ->controller(NewsController::class)
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
        Route::get('/account','account');
        Route::get('/project','project');
    });
Route::prefix('company')
        ->controller(CompanyController::class)
        ->group(function (){
            Route::get('/accounts','getAccount');
            Route::get('/projects','getProject');
        });
 Route::controller(LandingController::class)
    ->group(function (){
        Route::get('/','index');
    });

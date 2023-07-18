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
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceControlller;
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
        Route::post('/filtered', 'filter')->name('filter.donation');
        Route::put('/update_publish/{id}','update_publish')->name('update.publish');
        Route::put('/update_unpublish/{id}','update_unpublish')->name('update.unpublish');
        Route::put('/update_enable/{id}','update_enable')->name('update.enable.donation');
        Route::put('/update_disable/{id}','update_disable')->name('update.disable.donation');
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
        Route::put('/update_enable/{id}','update_enable')->name('ukm.enable');
        Route::put('/update_disable/{id}','update_disable')->name('ukm.disable');

    });

Route::prefix('location')
    ->controller(LocationController::class)
    ->group(function (){
        Route::get('/','index')->name('location');
        Route::get('/indexDisabled','indexDisabled')->name('indexDisabled');
        Route::get('/add','add');
        Route::post('/store', 'store')->name('store.location');
        Route::delete('/{id}','destroy')->name('delete.location');
        Route::get('/edit/{id}','edit')->name('edit.location');
        Route::put('/edit/{id}','update')->name('update.location');
        Route::put('/update_enable/{id}','update_enable')->name('update.enable');
        Route::put('/update_disable/{id}','update_disable')->name('update.disable');

    });
Route::controller(LandingController::class)
    ->group(function (){
        Route::get('/','index');
        Route::get('/news/{id}', 'detailNews')->name('detail.news');
        Route::get('/blog','getBlog')->name('get.blog');
        Route::get('/blog/{id}','detailNews')->name('detail.blog');
    });

Route::controller(AboutController::class)
    ->group(function (){
        Route::get('/about','index');

    });
Route::controller(DonateController::class)
    ->group(function (){
        Route::get('/donate','index');
        Route::get('/donate/{id}', 'detail');
        Route::get('/donate-payment/{id}', 'payment');
    });
Route::controller(ArtikelController::class)
    ->group(function (){
        Route::get('/artikel','index');
    });
Route::controller(ContactController::class)
    ->group(function (){
        Route::get('/contact','index');
    });
Route::controller(ServiceControlller::class)
    ->group(function (){
        Route::get('/service','index');
    });
Auth::routes();

Route::get('/confirm-password', function () {
    return view('login');
    })->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);


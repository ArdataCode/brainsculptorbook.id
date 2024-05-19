<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Middleware\IsAdmin;
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

// Route::get('login')->uses('App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::get('/', [App\Http\Controllers\CampurController::class, 'index']);
Route::post('cekusername', [App\Http\Controllers\CampurController::class, 'cekusername']);
Route::post('userauth', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('storeuser', [App\Http\Controllers\CampurController::class, 'storeuser']);


Route::middleware([IsAdmin::class])->group(function () {
    Route::group(['prefix' => 'admin'], function(){
        Route::get('home', [App\Http\Controllers\AdminController::class, 'index']);
        Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'profil']);
        Route::post('/updateUserProfil', [App\Http\Controllers\ProfilController::class, 'update']);
        Route::post('/updateUserPassword', [App\Http\Controllers\ProfilController::class, 'updatepassword']);

        // Slider Mst
        Route::get('slider', [App\Http\Controllers\SliderController::class, 'index']);
        Route::post('storeslider', [App\Http\Controllers\SliderController::class, 'store']);
        Route::post('updateslider/{id}', [App\Http\Controllers\SliderController::class, 'update']);
        Route::post('hapusslider/{id}', [App\Http\Controllers\SliderController::class, 'destroy']); 

        // Video Mst
        Route::get('video', [App\Http\Controllers\VideoController::class, 'index']);
        Route::post('storevideo', [App\Http\Controllers\VideoController::class, 'store']);
        Route::post('updatevideo/{id}', [App\Http\Controllers\VideoController::class, 'update']);
        Route::post('hapusvideo/{id}', [App\Http\Controllers\VideoController::class, 'destroy']); 
        
        // Template
        Route::get('template', [App\Http\Controllers\AdminController::class, 'indextmp']);
        Route::post('/updatetemplate/{id}', [App\Http\Controllers\AdminController::class, 'updatetmp']);

        // User Join
        Route::get('/user', [App\Http\Controllers\UserListController::class, 'index']);
        Route::get('/exportuser', [App\Http\Controllers\UserListController::class, 'exportuser']);

    });
});

Route::post('getKabupaten', [App\Http\Controllers\CampurController::class, 'getKabupaten']);
Route::post('getKecamatan', [App\Http\Controllers\CampurController::class, 'getKecamatan']);
// Auth::routes(); 
// Auth::routes(['login' => false]);       
Auth::routes(['register' => false]);       

// Route::group(['middleware' => 'IsAdmin'], function () {
    
// });




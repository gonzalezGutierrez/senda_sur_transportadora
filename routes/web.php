<?php

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

Route::get('welcome_admin',[\App\Http\Controllers\AdministacionController::class,'create']);
Route::post('welcome_admin',[\App\Http\Controllers\AdministacionController::class,'store']);

Route::get('login',[\App\Http\Controllers\AuthController::class,'form'])->name('login');
Route::post('login',[\App\Http\Controllers\AuthController::class,'login']);

/********************************************************************************************/
/****************************************PAGES***********************************************
/********************************************************************************************/

Route::get('/',[\App\Http\Controllers\Pages\PagesController::class,'home']);

/********************************************************************************************/
/****************************************ADMINISTRACION**************************************
/********************************************************************************************/

Route::group(['prefix'=>'administracion','middleware'=>['auth','admin.middleware']],function(){

    Route::get('/',[\App\Http\Controllers\AdministacionController::class,'home']);

    Route::group(['prefix'=>'categories'],function(){

        Route::get('/',[\App\Http\Controllers\Admin\CategoryController::class,'index']);
        Route::get('/create',[\App\Http\Controllers\Admin\CategoryController::class,'create']);

        Route::post('/',[\App\Http\Controllers\Admin\CategoryController::class,'store']);

        Route::get('/{id}/edit',[\App\Http\Controllers\Admin\CategoryController::class,'edit']);
        Route::post('{id}/upload_banner',[\App\Http\Controllers\Admin\CategoryController::class,'uploadBanner']);

        Route::put('/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'update']);

    });

    Route::group(['prefix'=>'places'],function(){

        Route::get('/',[\App\Http\Controllers\PlaceController::class,'index']);
        Route::get('/create',[\App\Http\Controllers\PlaceController::class,'create']);

        Route::post('/',[\App\Http\Controllers\PlaceController::class,'store']);

        Route::get('/{id}/edit',[\App\Http\Controllers\PlaceController::class,'edit']);
        Route::post('{id}/upload_banner',[\App\Http\Controllers\PlaceController::class,'uploadBanner']);
        Route::post('{id}/galery/post-image',[\App\Http\Controllers\PlaceController::class,'postImage']);

        Route::put('/{id}',[\App\Http\Controllers\PlaceController::class,'update']);

    });

    Route::group(['prefix'=>'tours'],function(){

        Route::get('/',[\App\Http\Controllers\TourController::class,'index']);

        Route::get('/create',[\App\Http\Controllers\TourController::class,'create']);
        Route::post('/',[\App\Http\Controllers\TourController::class,'store']);

        Route::get('/{id}/edit',[\App\Http\Controllers\TourController::class,'edit']);
        Route::put('/{id}',[\App\Http\Controllers\TourController::class,'update']);
        Route::post('{id}/upload_banner',[\App\Http\Controllers\TourController::class,'uploadBanner']);

        Route::patch('/{id}/program/{program_id}/{place_id}/assign-date',[\App\Http\Controllers\TourController::class,'assignDate']);

    });

    Route::get('social_networks',[\App\Http\Controllers\SocialNetworkController::class,'addUpdate']);
    Route::post('social_networks',[\App\Http\Controllers\SocialNetworkController::class,'storeUpdate']);

});

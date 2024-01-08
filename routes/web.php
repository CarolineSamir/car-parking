<?php

use App\Http\Controllers\SetupController;
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
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TripController;


Auth::routes();


Route::get('/setup', [SetupController::class, 'setup' ]) ->name('setup');
Route::post('/driver-register', [UserController::class, 'register' ]) ->name('driver-register');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware('auth:agent')->group(function () {
        Route::get('userdata', 'ProfileController@userdata'); // return user id
    });
    Route::get('drivers/index', [DriverController::class, 'index' ]) ->name('drivers-index');
    Route::get('drivers/new', [DriverController::class, 'new' ]) ->name('drivers-new');
    Route::post('drivers/add', [DriverController::class, 'add' ]) ->name('drivers-add');
    Route::get('drivers/edit/{id}', [DriverController::class, 'edit' ]) ->name('drivers-edit');
    Route::post('drivers/update', [DriverController::class, 'update' ]) ->name('drivers-update');
    Route::post('drivers/delete', [DriverController::class, 'delete' ]) ->name('drivers-delete');
    Route::post('drivers/count', [DriverController::class, 'count' ]) ->name('drivers-count');
    Route::get('drivers/accounting/{id}', [DriverController::class, 'accounting' ]) ->name('drivers-accounting');
    Route::get('car/new', [CarController::class, 'new' ]) ->name('car-new');
    Route::post('car/add', [CarController::class, 'add' ]) ->name('car-add');
    Route::get('car/index', [CarController::class, 'index' ]) ->name('car-index');
    Route::get('car/edit/{id}', [CarController::class, 'edit' ]) ->name('car-edit');
    Route::post('car/update', [CarController::class, 'update' ]) ->name('car-update');
    Route::post('car/delete', [CarController::class, 'delete' ]) ->name('car-delete');
    Route::post('trip/add', [TripController::class, 'add' ]) ->name('trip-add');
    Route::get('trip/new', [TripController::class, 'new' ]) ->name('trip-new');
    Route::get('/my/profile', [UserController::class, 'myProfile' ]) ->name('myProfile');
    Route::post('/my/profile/edit', [UserController::class, 'edit' ]) ->name('myProfile-edit');

    Route::POST('/add', [DriverController::class, 'add' ]) ->name('addDriver');
    Route::POST('/drivers', [CarController::class, 'registerUser' ]) ->name('cars');


});


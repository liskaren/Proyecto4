<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\IncidenceController;
use App\Http\Controllers\RecordController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route:: resource('lineas',LineaController::class);

Route:: resource('operators',OperatorController::class);

Route:: resource('products',ProductController::class);

Route:: resource('orders',OrderController::class);

Route:: resource('departments',DepartmentController::class);


Route:: resource('plants',PlantController::class);

Route:: resource('productions',ProductionController::class);


Route:: resource('incidencies',IncidenceController::class);

Route:: resource('records',RecordController::class);
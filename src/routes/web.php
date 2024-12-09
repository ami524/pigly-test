<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiglyController;

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

Route::get('/weight_logs', [PiglyController::class, 'index']);
Route::get('/weight_logs/create', [PiglyController::class, 'entry']);
Route::get('/weight_logs/search', [PiglyController::class, 'search']);
Route::get('/weight_logs/{:weightLogId}', [PiglyController::class, 'detail']);
Route::get('/weight_logs/{:weightLogId}/update', [PiglyController::class, 'update']);
Route::get('/weight_logs/{:weightLogId}/delete', [PiglyController::class, 'delete']);
Route::get('/wight_logs/goal_setting', [PiglyController::class, 'goal']);
Route::get('/register/step1', [PiglyController::class, 'membership-registration']);
Route::get('/register/step2', [PiglyController::class, 'initial-goal']);
Route::get('/login', [PiglyController::class, 'login']);
Route::get('/logout', [PiglyController::class, 'logout']);
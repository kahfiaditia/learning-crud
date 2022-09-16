<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdulevelController;
use App\Http\Controllers\PelajaranController;

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
    return view('welcome',[
        "title" => "Home"
    ]);
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class, 'data']);
Route::get('edulevels/add', [EdulevelController::class, 'add']);
Route::post('edulevels', [EdulevelController::class, 'addProcess']);

Route::get('pelajaran',[PelajaranController::class, 'pelajaran']);
Route::get('pelajaran/input',[PelajaranController::class, 'input']);
Route::post('pelajaran',[PelajaranController::class, 'proses']);
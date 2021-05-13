<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputApiController;
        

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/inputs', [InputApiController::class, 'index']);
//route untuk bisa melihat lebih spesifik pada 1 data
Route::get('/inputs/{id}', [InputApiController::class, 'show']);

//di api gak perlu create karena form yang digunakan nanti diaplikasi
//route menyimpan data
Route::post('/inputs', [InputApiController::class, 'simpan']);

//untuk form edit tidak dibuatkan route karena nanti dari aplikasinya
// pakek method put karena pakek update/edit data
Route::put('/inputs/{id}', [InputApiController::class, 'update']);

//route delete data dari id data yang ingin di delete data
Route::delete('/inputs/{id}', [InputApicontroller::class, 'destroy']);

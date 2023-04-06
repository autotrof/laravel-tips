<?php

use App\Http\Controllers\MobilController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Log::error("Ada yang akses");
    return view('welcome');
});

Route::resource('mobil', MobilController::class);
Route::get('/contoh/{id}', [MobilController::class, 'contohRelasiOneToMany']);

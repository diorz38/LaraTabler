<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Project::where('user_id',$this->currentUser)->whereMonth('tgl_berakhir', $this->currentMonth)->where('parent_id','!=',NULL)->paginate()
*/
Route::get('/page/{kf}', [TestController::class,'index']);


Route::get('/page/{page}', function () {
    // $page = 1;
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/backend/dashboard', function () {
    return view('dashboard');
})->name('backend.dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard2');
})->name('dashboard');

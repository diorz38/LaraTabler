<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\InertiaControllers\ProjectController;

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

Route::get('test-projects', [ProjectController::class, 'testProject']);

Route::get('/packages-info', function () {
    $metadata = json_decode(file_get_contents(base_path('package-lock.json')));
    // return $metaKeys = collect($metadata->dependencies);
    // return $metaKeys["@inertiajs/inertia"]->version;
    return collect($metadata->dependencies)->keys();
    // \Config::set('APP_VERSION', $metadata->version);
})->name('packages.info');

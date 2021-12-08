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

Route::impersonate();

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::impersonate();


Route::group([
    'prefix' => 'tabler',
    'middleware' => ['auth:sanctum', 'verified'],
], function () {

    Route::get('/forms', function(){
        return view('pages.tabler.form-elements');
    })->name('tabler.forms');

    Route::get('/interface/empty', function(){
        return view('pages.tabler.empty');
    })->name('interface.tabler.empty');

    Route::get('/interface/accordion', function(){
        return view('pages.tabler.accordion');
    })->name('interface.tabler.accordion');

    Route::get('/interface/blank', function(){
        return view('pages.tabler.blank');
    })->name('interface.tabler.blank');

    Route::get('/interface/buttons', function(){
        return view('pages.tabler.buttons');
    })->name('interface.tabler.buttons');

    Route::get('/interface/cards', function(){
        return view('pages.tabler.cards');
    })->name('interface.tabler.cards');

    Route::get('/interface/cards-masonry', function(){
        return view('pages.tabler.cards-masonry');
    })->name('interface.tabler.cards-masonry');

    Route::get('/interface/colors', function(){
        return view('pages.tabler.colors');
    })->name('interface.tabler.colors');

    Route::get('/interface/dropdowns', function(){
        return view('pages.tabler.dropdowns');
    })->name('interface.tabler.dropdowns');

    Route::get('/interface/icons', function(){
        return view('pages.tabler.icons');
    })->name('interface.tabler.icons');

    Route::get('/interface/modals', function(){
        return view('pages.tabler.modals');
    })->name('interface.tabler.modals');

    Route::get('/interface/maps', function(){
        return view('pages.tabler.maps');
    })->name('interface.tabler.maps');

    Route::get('/interface/map-fullsize', function(){
        return view('pages.tabler.map-fullsize');
    })->name('interface.tabler.map-fullsize');

    Route::get('/interface/maps-vector', function(){
        return view('pages.tabler.maps-vector');
    })->name('interface.tabler.maps-vector');

    Route::get('/interface/navigation', function(){
        return view('pages.tabler.navigation');
    })->name('interface.tabler.navigation');

    Route::get('/interface/charts', function(){
        return view('pages.tabler.charts');
    })->name('interface.tabler.charts');

    Route::get('/interface/pagination', function(){
        return view('pages.tabler.pagination');
    })->name('interface.tabler.pagination');

    Route::get('/interface/skeleton', function(){
        return view('pages.tabler.skeleton');
    })->name('interface.tabler.skeleton');

    Route::get('/interface/tabs', function(){
        return view('pages.tabler.tabs');
    })->name('interface.tabler.tabs');

    Route::get('/interface/tables', function(){
        return view('pages.tabler.tables');
    })->name('interface.tabler.tables');

    Route::get('/interface/carousel', function(){
        return view('pages.tabler.carousel');
    })->name('interface.tabler.carousel');

    Route::get('/interface/lists', function(){
        return view('pages.tabler.lists');
    })->name('interface.tabler.lists');

    Route::get('/interface/typography', function(){
        return view('pages.tabler.typography');
    })->name('interface.tabler.typography');

    Route::get('/interface/markdown', function(){
        return view('pages.tabler.markdown');
    })->name('interface.tabler.markdown');


    Route::get('/extra/activity', function(){
        return view('pages.tabler.extra.activity');
    })->name('extra.tabler.activity');

    Route::get('/extra/gallery', function(){
        return view('pages.tabler.extra.gallery');
    })->name('extra.tabler.gallery');

    Route::get('/extra/invoice', function(){
        return view('pages.tabler.extra.invoice');
    })->name('extra.tabler.invoice');

    Route::get('/extra/license', function(){
        return view('pages.tabler.extra.license');
    })->name('extra.tabler.license');

    Route::get('/extra/music', function(){
        return view('pages.tabler.extra.music');
    })->name('extra.tabler.music');

    Route::get('/extra/pricing', function(){
        return view('pages.tabler.extra.pricing');
    })->name('extra.tabler.pricing');

    Route::get('/extra/search-result', function(){
        return view('pages.tabler.extra.search-result');
    })->name('extra.tabler.search_result');

    Route::get('/extra/users', function(){
        return view('pages.tabler.extra.users');
    })->name('extra.tabler.users');

    Route::get('/extra/widgets', function(){
        return view('pages.tabler.extra.widgets');
    })->name('extra.tabler.widgets');

    Route::get('/extra/wizard', function(){
        return view('pages.tabler.extra.wizard');
    })->name('extra.tabler.wizard');


    Route::get('/layout/horizontal', function(){
        return view('pages.tabler.layouts.layout-horizontal');
    })->name('layout.tabler.horizontal');

    Route::get('/layout/sticky', function(){
        return view('pages.tabler.layouts.layout-navbar-sticky');
    })->name('layout.tabler.sticky');

    Route::get('/layout/condensed', function(){
        return view('pages.tabler.layouts.layout-condensed');
    })->name('layout.tabler.condensed');

    Route::get('/layout/condensed-dark', function(){
        return view('pages.tabler.layouts.layout-condensed-dark');
    })->name('layout.tabler.condensed-dark');

    Route::get('/layout/combo', function(){
        return view('pages.tabler.layouts.layout-combo');
    })->name('layout.tabler.combo');

});

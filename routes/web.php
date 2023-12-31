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

Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

Route::get('/', function () {
    return view(setting('site.template').'index');
})->name('home');

Route::get('/portfolio-details/{name}', function () {
    $data = App\Models\Portfolio::where('slug', request()->name)->first();
    $data->increment('views');
    $data->save();
    return view(setting('site.template').'portfolio-details', compact('data'));
})->name('portfolio.details');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');

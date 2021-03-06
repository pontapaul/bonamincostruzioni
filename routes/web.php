<?php

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

use App\CaseHistory;
use App\IGFeed;

Route::get('/', function () {
    return view('homepage', [
        'items' => CaseHistory::where('enabled', true)->where('homepage', true)->get(),
        'pictures' => IGFeed::fetch(),
    ]);
});

Route::get('/chi-siamo', ['as' => 'chi-siamo', function () {
    return view('chi-siamo');
}]);

Route::get('/contatti', ['as' => 'contatti', function () {
    return view('contatti');
}]);

Route::get('/lavori', ['as' => 'lavori', function () {
    return view('lavori', [
        'items' => CaseHistory::where('enabled', true)->get(),
    ]);
}]);

Route::get('/richiesta-inviata', ['as' => 'thank-you', function () {
    return view('thank-you');
}]);

Route::post('contattaci', 'FrontendController@submitForm')->name('submit-form');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@dashboard')->name('dashboard');

    Route::get('/edit/{id?}', 'AdminController@showForm')->name('edit.case');
    Route::post('/edit/{id?}', 'AdminController@processForm');

    Route::get('/delete/{id}', 'AdminController@delete')->name('delete.case');
});

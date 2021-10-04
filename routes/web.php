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

Auth::routes();

// ============ front =====
Route::get('/', 'front\\frontController@index');
Route::get('/donasi/{id}', 'front\\frontController@donasi');
Route::get('/donasi/{id}/donasi', 'front\\frontController@donasicreate');
Route::post('/donasi/{id}/donasi/store', 'front\\frontController@donasistore');
Route::get('/daftarprogram', 'front\\frontController@daftarprogram');
Route::get('/program/category/{id}', 'front\\frontController@programcategory');
Route::post('/konfirmasi/store/{id}', 'front\\frontController@konfirmasistore');
Route::get('/thx/{id}', 'front\\frontController@thx')->name('thx');
Route::get('/konfirmasi/thx/{id}', 'front\\frontController@thxkonfir')->name('thxkonfir');


// ======= back =====
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['middleware' => ['auth']], function () {
            Route::get('/index', 'back\\donasiController@index');
            Route::get('/verifikasi/{id}', 'back\\donasiController@verifikasi');

            Route::resource('category', 'back\\categoryController');
            Route::get('/categories', 'back\\categoryController@index');
            Route::post('/categories/create', 'back\\categoryController@store');
            Route::get('/categories/{id}/edit', 'back\\categoryController@edit');
            Route::post('/categories/{id}/update', 'back\\categoryController@update');
            Route::get('/delete/{id}', 'back\\categoryController@destroy');
            
            Route::resource('program', 'back\\programController');
            Route::get('/detailprogram/{id}', 'back\\programController@detail')->name('detail');
            Route::get('/published/{id}', 'back\\programController@published');
            Route::get('/selected/{id}', 'back\\programController@selected');
            Route::get('/delete/{id}', 'back\\programController@destroy');
            Route::get('/laporanperkembangan/create/{id}', 'back\\programController@createlaporanperkembangan');
            Route::post('/laporanperkembangan/store', 'back\\programController@storelaporanperkembangan');
        });
    });
});

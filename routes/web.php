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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('posts', 'PagesController@posts')->name('posts');

Route::get('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

Route::get('actividades', 'PagesController@actividades')->name('actividades');

Route::get('actividades/{id}', 'PagesController@detalle')->name('actividades.detalle');

Route::post('actividades', 'PagesController@crear')->name('actividades.crear');

Route::get('actividades/editar/{id}', 'PagesController@editar')->name('actividades.editar');

Route::put('actividades/editar/{id}', 'PagesController@actualizar')->name('actividades.actualizar');

Route::delete('actividades/eliminar/{id}', 'PagesController@eliminar')->name('actividades.eliminar');
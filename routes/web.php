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
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'Web\PageController@index')->name('page.index');

Auth::routes();

Route::get('buscaCep', function(){
	return view('web.tests.busca-cep');
});

Route::get('locations', 'Web\TestController@location')->name('location.list');

//Route::resource('countries','CountriesController');
Route::get('countries-list','Admin\CountryController@getList');

//Route::resource('states','StatesController');
Route::get('states-list/{country_id}','Admin\StateController@getList');

//Route::resource('cities','CitiesController');
Route::get('cities-list/{state_id}','Admin\CityController@getList');

//Route::resource('addresses','AddressesController');

//Rotas para administrador do sistema
Route::middleware(['auth'])->group(function(){
	require base_path('routes/admin.php');
});

//Rotas para testes no sistema
Route::middleware(['auth'])->group(function(){
	require base_path('routes/test.php');
});
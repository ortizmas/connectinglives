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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('tests', 'TestController');

Auth::routes();

Route::get('/home', 'Admin\HomeController@index')->name('home');
Route::get('/tables', 'Admin\HomeController@tables')->name('tables');
Route::get('/charts', 'Admin\HomeController@charts')->name('charts');
Route::get('/forms', 'Admin\HomeController@forms')->name('forms');
Route::get('/login-page', 'Admin\HomeController@loginPage')->name('loginPage');
Route::get('/register-page', 'Admin\HomeController@registerPage')->name('registerPage');

//Rotas de tests
Route::get('/obter-dados-com-cep', 'Web\TestController@getEnderecoViaCep')->name('edereco.cep');
Route::post('/cpe/store', 'Web\TestController@store')->name('cep.store');
Route::get('/obter-dados-com-cep-ajax', 'Web\TestController@getEnderecoViaCepAjax')->name('edereco.ajax');
Route::post('cep/getEndereco', 'Web\TestController@getViaCepAjax')->name('cep.ederecoAjax');
Route::post('/cpe/ajax', 'Web\TestController@storeAjax')->name('cep.ajax');

Route::get('buscaCep', function(){
	return view('web.tests.busca-cep');
});

Route::get('select-anidado', function(){
	return view('web.tests.select-anidado');
});
Route::get('/ufs/', function($uf = null){
    return response()->json(\Artesaos\Cidade::select('uf')->distinct('uf')->orderBy('uf')->get());
});

Route::get('/cidades/{uf}', function($uf = null){
    return response()->json(\Artesaos\Cidade::where('uf', $uf)->orderBy('nome')->get());
});

Route::get('locations', 'Web\TestController@location')->name('location.list');

//Rotas para administrador do sistema
Route::middleware(['auth'])->group(function(){
	require base_path('routes/admin.php');
});
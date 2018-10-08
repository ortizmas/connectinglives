<?php  
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
?>
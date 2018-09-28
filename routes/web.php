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
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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


// Route::get ( '/datatable', function () {
// 	$data = User::all ();
// 	return view ( 'admin.peoples.index' )->withData ( $data );
// } );
Route::post ( '/editItem', function (Request $request) {
	
	$rules = array (
			'fname' => 'required|alpha',
			'lname' => 'required|alpha',
			'email' => 'required|email',
			'gender' => 'required',
			'country' => 'required|regex:/^[\pL\s\-]+$/u',
			'salary' => 'required|regex:/^\d*(\.\d{2})?$/' 
	);
	$validator = Validator::make ( Input::all (), $rules );
	if ($validator->fails ())
		return Response::json ( array (
				
				'errors' => $validator->getMessageBag ()->toArray () 
		) );
	else {
		
		$data = User::find ( $request->id );
		$data->first_name = ($request->fname);
		$data->last_name = ($request->lname);
		$data->email = ($request->email);
		$data->gender = ($request->gender);
		$data->country = ($request->country);
		$data->salary = ($request->salary);
		$data->save ();
		return response ()->json ( $data );
	}
} );
Route::post ( '/deleteItem', function (Request $request) {
	Data::find ( $request->id )->delete ();
	return response ()->json ();
} );
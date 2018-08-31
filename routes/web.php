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

//Rotas
Route::middleware(['auth'])->group(function(){

	//Roles
	Route::post('roles/store', 'Admin\RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'Admin\RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'Admin\RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'Admin\RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'Admin\RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'Admin\RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'Admin\RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');


	//Users

	Route::get('users', 'Admin\UserController@index')->name('users.index')
		->middleware('permission:users.index');
	Route::get('users/create', 'Admin\UserController@create')->name('users.create')
		->middleware('permission:users.index');
	Route::post('users/store', 'Admin\UserController@store')->name('users.store')
		->middleware('permission:users.index');
	Route::get('users/{user}/edit', 'Admin\UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');
	Route::put('users/{user}/update', 'Admin\UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}/perfil', 'Admin\UserController@perfil')->name('users.perfil')
		->middleware('permission:users.perfil');
	Route::put('users/{user}', 'Admin\UserController@perfilUpdate')->name('users.perfilUpdate')
		->middleware('permission:users.perfilUpdate');

	Route::get('users/{user}', 'Admin\UserController@show')->name('users.show')
		->middleware('permission:users.show');
	Route::delete('users/{user}', 'Admin\UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');
	

        //Courses
	Route::post('courses/store', 'Admin\CourseController@store')->name('courses.store')
	->middleware('permission:courses.create');
	Route::get('courses', 'Admin\CourseController@index')->name('courses.index')
	->middleware('permission:courses.index');
	Route::get('courses/create', 'Admin\CourseController@create')->name('courses.create')
	->middleware('permission:courses.create');
	Route::put('courses/{course}', 'Admin\CourseController@update')->name('courses.update')
	->middleware('permission:courses.edit');
	Route::get('courses/{course}', 'Admin\CourseController@show')->name('courses.show')
	->middleware('permission:courses.show');
	Route::delete('courses/{course}', 'Admin\CourseController@destroy')->name('courses.destroy')
	->middleware('permission:courses.destroy');
	Route::get('courses/{course}/edit', 'Admin\CourseController@edit')->name('courses.edit')
	->middleware('permission:courses.edit');

});
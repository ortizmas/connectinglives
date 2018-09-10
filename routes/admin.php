<?php

//Permissions
Route::get('permissions', 'Admin\PermissionController@index')->name('permissions.index')
->middleware('permission:permissions.index');
Route::get('permissions/create', 'Admin\PermissionController@create')->name('permissions.create')
->middleware('permission:permissions.create');
Route::post('permissions/store', 'Admin\PermissionController@store')->name('permissions.store')
->middleware('permission:permissions.create');
Route::get('permissions/{permission}/edit', 'Admin\PermissionController@edit')->name('permissions.edit')
->middleware('permission:permissions.edit');
Route::put('permissions/{permission}', 'Admin\PermissionController@update')->name('permissions.update')
->middleware('permission:permissions.edit');
Route::get('permissions/{permission}', 'Admin\PermissionController@show')->name('permissions.show')
->middleware('permission:permissions.show');
Route::delete('permissions/{permission}', 'Admin\PermissionController@destroy')->name('permissions.destroy')
->middleware('permission:permissions.destroy');


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

//Peoples
Route::post('peoples/store', 'Admin\PeopleController@store')->name('peoples.store')
->middleware('permission:peoples.create');
Route::get('peoples', 'Admin\PeopleController@index')->name('peoples.index')
->middleware('permission:peoples.index');
Route::get('peoples/create', 'Admin\PeopleController@create')->name('peoples.create')
->middleware('permission:peoples.create');
Route::put('peoples/{people}', 'Admin\PeopleController@update')->name('peoples.update')
->middleware('permission:peoples.edit');
Route::get('peoples/{people}', 'Admin\PeopleController@show')->name('peoples.show')
->middleware('permission:peoles.show');
Route::delete('peoples/{people}', 'Admin\PeopleController@destroy')->name('peoples.destroy')
->middleware('permission:peoples.destroy');
Route::get('peoples/{people}/edit', 'Admin\PeopleController@edit')->name('peoples.edit')
->middleware('permission:peoples.edit');

//Peoples
Route::get('countries', 'Admin\CountryController@index')->name('countries.index')
->middleware('permission:countries.index');
Route::get('countries/create', 'Admin\CountryController@create')->name('countries.create')
->middleware('permission:countries.create');
Route::post('countries/store', 'Admin\CountryController@store')->name('countries.store')
->middleware('permission:countries.create');
Route::get('countries/{country}/edit', 'Admin\CountryController@edit')->name('countries.edit')
->middleware('permission:countries.edit');
Route::put('countries/{country}', 'Admin\CountryController@update')->name('countries.update')
->middleware('permission:countries.edit');
Route::get('countries/{country}', 'Admin\CountryController@show')->name('countries.show')
->middleware('permission:peoles.show');
Route::delete('countries/{country}', 'Admin\CountryController@destroy')->name('countries.destroy')
->middleware('permission:countries.destroy');

//Estados
Route::get('states', 'Admin\StateController@index')->name('states.index')
->middleware('permission:states.index');
Route::get('states/create', 'Admin\StateController@create')->name('states.create')
->middleware('permission:states.create');
Route::post('states/store', 'Admin\StateController@store')->name('states.store')
->middleware('permission:states.create');
Route::get('states/{state}/edit', 'Admin\StateController@edit')->name('states.edit')
->middleware('permission:states.edit');
Route::put('states/{state}', 'Admin\StateController@update')->name('states.update')
->middleware('permission:states.edit');
Route::get('states/{state}', 'Admin\StateController@show')->name('states.show')
->middleware('permission:peoles.show');
Route::delete('states/{state}', 'Admin\StateController@destroy')->name('states.destroy')
->middleware('permission:states.destroy');

//Cidades
Route::get('cities', 'Admin\CityController@index')->name('cities.index')
->middleware('permission:cities.index');
Route::get('cities/create', 'Admin\CityController@create')->name('cities.create')
->middleware('permission:cities.create');
Route::post('cities/store', 'Admin\CityController@store')->name('cities.store')
->middleware('permission:cities.create');
Route::get('cities/{city}/edit', 'Admin\CityController@edit')->name('cities.edit')
->middleware('permission:cities.edit');
Route::put('cities/{city}', 'Admin\CityController@update')->name('cities.update')
->middleware('permission:cities.edit');
Route::get('cities/{city}', 'Admin\CityController@show')->name('cities.show')
->middleware('permission:peoles.show');
Route::delete('cities/{city}', 'Admin\CityController@destroy')->name('cities.destroy')
->middleware('permission:cities.destroy');

//Endereços
Route::get('addresses', 'Admin\AddressController@index')->name('addresses.index')
->middleware('permission:addresses.index');
Route::get('addresses/create', 'Admin\AddressController@create')->name('addresses.create')
->middleware('permission:addresses.create');
Route::post('addresses/store', 'Admin\AddressController@store')->name('addresses.store')
->middleware('permission:addresses.create');
Route::get('addresses/{address}/edit', 'Admin\AddressController@edit')->name('addresses.edit')
->middleware('permission:addresses.edit');
Route::put('addresses/{address}', 'Admin\AddressController@update')->name('addresses.update')
->middleware('permission:addresses.edit');
Route::get('addresses/{address}', 'Admin\AddressController@show')->name('addresses.show')
->middleware('permission:peoles.show');
Route::delete('addresses/{address}', 'Admin\AddressController@destroy')->name('addresses.destroy')
->middleware('permission:addresses.destroy');

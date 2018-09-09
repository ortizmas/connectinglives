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
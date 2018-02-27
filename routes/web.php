<?php


Route::get('/', function () {
    return view('home');
});

/*Haciendo un grupo de rutas... para el Director*/
Route::group(['prefix' => 'director', 'namespace' => 'Director', 'as' =>'director.', 'middleware' => ['auth','director']], function(){
	//Grupo de rutas para el Director/Curso
	Route::group(['prefix' => 'curso', 'as' =>'curso.'], function(){
		Route::get('/', [
			'uses' => 'CursoController@index',
			'as' => 'index']);
		Route::get('create', [
			'uses' => 'CursoController@create',
			'as' => 'create']);
		Route::post('/',[
			'uses' => 'CursoController@store',
			'as' => 'store']);
		Route::get('{curso}',[
			'uses' => 'CursoController@show',
			'as' => 'show']);
		Route::get('{curso}/edit',[
			'uses' => 'CursoController@edit',
			'as' => 'edit']);
		Route::put('{curso}',[
			'uses' => 'CursoController@update',
			'as' => 'update']);
		Route::get('{id}/destroy',[
			'uses' => 'CursoController@destroy',
			'as' => 'destroy']);
	});
	//Grupo de rutas para el Director/Docente
	Route::group(['prefix' => 'docente', 'as' =>'docente.'], function(){
		Route::get('/', [
			'uses' => 'DocenteController@index',
			'as' => 'index']);
		Route::post('/',[
			'uses' => 'DocenteController@store',
			'as' => 'store']);
		Route::get('{docente}',[
			'uses' => 'DocenteController@show',
			'as' => 'show']);
		Route::get('{docente}/edit',[
			'uses' => 'DocenteController@edit',
			'as' => 'edit']);
		Route::put('{docente}',[
			'uses' => 'DocenteController@update',
			'as' => 'update']);
		Route::get('{id}/destroy',[
			'uses' => 'DocenteController@destroy',
			'as' => 'destroy']);
	});
	//Grupo de rutas para el Director/Semestre
	Route::group(['prefix' => 'semestre', 'as' =>'semestre.'], function(){
		Route::get('/', [
			'uses' => 'SemestreController@index',
			'as' => 'index']);
		Route::get('create', [
			'uses' => 'SemestreController@create',
			'as' => 'create']);
		Route::post('/',[
			'uses' => 'SemestreController@store',
			'as' => 'store']);
		Route::get('{semestre}',[
			'uses' => 'SemestreController@show',
			'as' => 'show']);
		Route::get('{semestre}/edit',[
			'uses' => 'SemestreController@edit',
			'as' => 'edit']);
		Route::put('{semestre}',[
			'uses' => 'SemestreController@update',
			'as' => 'update']);
		Route::get('{id}/destroy',[
			'uses' => 'SemestreController@destroy',
			'as' => 'destroy']);
	});
	//Grupo de rutas para el Director/silabo
	Route::resource('silabo', 'SilaboController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

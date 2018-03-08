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
		Route::post('storeCurso',[
			'uses' => 'SemestreController@storeCurso',
			'as' => 'storeCurso']);
		Route::post('storeCursoDocente',[
			'uses' => 'SemestreController@storeCursoDocente',
			'as' => 'storeCursoDocente']);
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

	Route::group(['prefix' => 'silabo', 'as' =>'silabo.'], function(){
		Route::get('/', [
			'uses' => 'SilaboController@index',
			'as' => 'index']);
		Route::get('create', [
			'uses' => 'SilaboController@create',
			'as' => 'create']);
		Route::post('/',[
			'uses' => 'SilaboController@store',
			'as' => 'store']);
		Route::get('{silabo}',[
			'uses' => 'SilaboController@show',
			'as' => 'show']);
		Route::get('{silabo}/edit',[
			'uses' => 'SilaboController@edit',
			'as' => 'edit']);
		Route::put('{silabo}',[
			'uses' => 'SilaboController@update',
			'as' => 'update']);
		Route::get('{id}/destroy',[
			'uses' => 'SilaboController@destroy',
			'as' => 'destroy']);
		Route::get('{silabo}',[
			'uses' => 'SilaboController@temaIndex',
			'as' => 'temaIndex']);
	});

	//Route::resource('silabo', 'SilaboController');


});


/*Haciendo un grupo de rutas... para el Docente*/
Route::group(['prefix' => 'docente', 'namespace' => 'Docente', 'as' =>'docente.', 'middleware' => ['auth','docente']], function(){
	//Grupo de rutas para el Docente/curso
	Route::group(['prefix' => 'curso', 'as' =>'curso.'], function(){
		Route::get('/', [
			'uses' => 'CursoController@index',
			'as' => 'index']);
		Route::post('create', [
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
	//Grupo de rutas para el Docente/temas
	Route::group(['prefix' => 'tema', 'as' =>'tema.'], function(){
		Route::get('/', [
			'uses' => 'TemaController@index',
			'as' => 'index']);
		Route::post('/',[
			'uses' => 'TemaController@store',
			'as' => 'store']);
		Route::get('{tema}',[
			'uses' => 'TemaController@show',
			'as' => 'show']);
		Route::get('{tema}/edit',[
			'uses' => 'TemaController@edit',
			'as' => 'edit']);
		Route::put('{tema}',[
			'uses' => 'TemaController@update',
			'as' => 'update']);
		Route::get('{id}/destroy',[
			'uses' => 'TemaController@destroy',
			'as' => 'destroy']);
	});	
});

/*Haciendo un grupo de rutas... para el Delegado*/
Route::group(['prefix' => 'delegado', 'namespace' => 'Delegado', 'as' =>'delegado.', 'middleware' => ['auth','delegado']], function(){
	//Grupo de rutas para el Delegado/cursos
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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'perfil', 'as' => 'perfil.', 'middleware' => 'auth'], function(){
	Route::get('/', [
		'uses' => 'PersonaController@index',
		'as' => 'index']);
	Route::get('create', [
		'uses' => 'PersonaController@create',
		'as' => 'create']);
	Route::post('/',[
		'uses' => 'PersonaController@store',
		'as' => 'store']);
	Route::get('{semestre}',[
		'uses' => 'PersonaController@show',
		'as' => 'show']);
	Route::get('{semestre}/edit',[
		'uses' => 'PersonaController@edit',
		'as' => 'edit']);
	Route::put('{semestre}',[
		'uses' => 'PersonaController@update',
		'as' => 'update']);
	Route::get('{id}/destroy',[
		'uses' => 'PersonaController@destroy',
		'as' => 'destroy']);
});
@extends('template.main')

@section('title-body','DOCENTE')

@section('content')
<div class="row">
    {!! Form::open(['route' => ['director.docente.update',$docente], 'method' => 'PUT']) !!}
        {{ csrf_field() }}
    	<div class="row">
    		<h5 class="center-align">DATOS BASICOS PARA ACTIVAR CUENTA DEL DOCENTE</h5>
    	</div>
    	<div class="row">
    		<div class="col s4 l3 offset-m1 offset-l2">
    			<p class="">Nombre</p>
    		</div>
    		<div class="col s8 m6 l5">
    			<input type="text" name="nombre" class="validate" required minlength="2" maxlength="45" value="{{ $docente->nombre }}">
    		</div>
    	</div>

    	<div class="row">
            <div class="col s4 l3 offset-m1 offset-l2">
    			<p class="">Apellido Paterno</p>
    		</div>
            <div class="col s8 m6 l5">
    			<input type="text" name="paterno" class="validate" required minlength="2" maxlength="45" value="{{ $docente->paterno }}">
    		</div>
    	</div>

    	<div class="row">
            <div class="col s4 l3 offset-m1 offset-l2">
    			<p class="">Apellido Materno</p>
    		</div>
            <div class="col s8 m6 l5">
    			<input type="text" name="materno" class="validate" maxlength="45" value="{{ $docente->materno }}">
    		</div>
    	</div>

    	<div class="row">
            <div class="col s4 l3 offset-m1 offset-l2">
    			<p class="">Codigo Docente</p>
    		</div>
            <div class="col s8 m6 l5">
    			<input type="text" name="codigo" class="validate" required minlength="10" maxlength="10" value="{{ $docente->codigo }}" data-length="10">
    		</div>
    	</div>

    	<div class="row">
            <div class="col s4 l3 offset-m1 offset-l2">
    			<p class="">Email</p>
    		</div>
            <div class="col s8 m6 l5">
    			<input type="email" name="email" class="validate" required minlength="8" maxlength="255" value="{{ $docente->email }}">
    		</div>
    	</div>

    	<div class="row">
            <div class="col s4 l3 offset-m1 offset-l2">
    			<p class="">Contraseña</p>
    		</div>
            <div class="col s8 m6 l5">
    			<input type="password" name="password" class="validate" required minlength="4" maxlength="255">
    		</div>
    	</div>

        <div class="center-align">
            <button class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Guardar</button>
        </div>
        <br>
    {!! Form::close() !!}
  </div>

@endsection
@extends('template.main')

@section('title-body','DOCENTE')

@section('content')
<div class="row">
    <form class="col s12 l10 offset-l1" method="POST" action="{{ route('director.docente.store') }}">
        {{ csrf_field() }}
    	<div class="row">
    		<h5 class="left-align">DATOS BASICOS PARA ACTIVAR CUENTA DEL DOCENTE</h5>
    	</div>
    	<div class="row">
    		<div class="col s12 l4">
    			<p class="">Nombre</p>
    		</div>
    		<div class="col s11 l8 offset-s1">
    			<input type="text" name="" id="" class="validate" placeholder="Nombre">
    		</div>
    	</div>

    	<div class="row">
    		<div class="col s6 l4">
    			<p class="">Apellido Paterno</p>
    		</div>
    		<div class="col s6 l8">
    			<input type="text" name="" id="" class="validate" placeholder="Apellido Paterno">
    		</div>
    	</div>

    	<div class="row">
    		<div class="col s6 l4">
    			<p class="">Apellido Materno</p>
    		</div>
    		<div class="col s6 l8">
    			<input type="text" name="" id="" class="validate" placeholder="Apellido Materno">
    		</div>
    	</div>

    	<div class="row">
    		<div class="col s6 l4">
    			<p class="">Codigo Docente</p>
    		</div>
    		<div class="col s6 l8">
    			<input type="text" name="" id="" class="validate" placeholder="Codigo Docente">
    		</div>
    	</div>

    	<div class="row">
    		<div class="col s6 l4">
    			<p class="">Correo Electrónico</p>
    		</div>
    		<div class="col s6 l8">
    			<input type="email" name="" id="" class="validate" placeholder="Correo Electrónico">
    		</div>
    	</div>

    	<div class="row">
    		<div class="col s6 l4">
    			<p class="">Contraseña</p>
    		</div>
    		<div class="col s6 l8">
    			<input type="password" name="" id="" class="validate" placeholder="Contraseña">
    		</div>
    	</div>

        <div class="center-align">
            <a class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Guardar</a>
        </div>
        <br>
    </form>
  </div>

@endsection
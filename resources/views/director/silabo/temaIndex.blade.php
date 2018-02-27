@extends('template.main')

@section('title-body','Unidad 1: Introduccion a la programacion')
@section('content')

<div class="row">
	<div class="col s12 m9 nav nav-wrapper">
      	<form>
	        <div class="input-field col s8">
	          <input id="search" type="search" required class="validate" placeholder="[Buscar]">
	        </div>

	        <div class="col s2 right-align">
	            <a class="btn-floating waves-effect waves-light blue darken-4"><i class="material-icons">search</i></a>
	        </div>
      	</form>

      	<div class="col s2">
          <a class="btn-floating waves-effect waves-light green darken-4" href="
         "><i class="material-icons">update</i></a>
      	</div>
       
  	</div>
  	<div class="col s12 m3 right-align">
        <span>¿Notificar observación? <a class="btn-floating waves-effect waves-light red darken-4" href=""><i class="material-icons">add</i></a></span>
    </div>
</div>

@endsection
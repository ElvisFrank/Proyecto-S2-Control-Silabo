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

    <!-- Contenido de la vista de validación-->
    <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>Fecha</th>
              <th>Sesión</th>
              <th>Validaciones</th>
              <th>Observaciones</th>
          </tr>
        </thead>

        <tbody>
        {{-- @foreach($Validaciones as $validacion)	
          <tr>
            <td>{{ $validacion->fecha }}</td>
            <td>{{ $validacion->tema }}</td>
            <td>{{ $validacion->val_docente }}</td>
            <td>{{ $validacion->val_delegado }}</td>        
            <td>
              <a class="btn-floating waves-effect waves-light green darken-4" href=""><i class="material-icons">remove_red_eye</i></a>
               <a class="btn-floating waves-effect waves-light blue darken-4" href=""><i class="material-icons">remove_red_eye</i></a>
            </td>
          </tr>
         @endforeach --}}
        </tbody>
      </table>

</div>

@endsection
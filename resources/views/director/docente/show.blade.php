@extends('template.main')
@section('title-body',"Docente:  $docente->nombre $docente->paterno")
@section('content')
<div class="row">
	<div class="col s12 card-panel blue lighten-5">
		<div class="col s5"><h5>Nombre</h5></div>
		<div class="col s7"><h5>: {{ $docente->nombre }}</h5></div>
		
		<div class="col s5 hide-on-small-only"><h5>Apellido Paterno</h5></div>
		<div class="col s5 hide-on-med-and-up"><h5>Apellido P.</h5></div>
		<div class="col s7"><h5>: {{ $docente->paterno }}</h5></div>
		@if($docente->materno)
			<div class="col s5 hide-on-small-only"><h5>Apellido Materno</h4></div>
			<div class="col s5 hide-on-med-and-up"><h5>Apellido M.</h4></div>
			<div class="col s7"><h5>: {{ $docente->materno }}</h5></div>
		@endif

		@if($docente->codigo)
			<div class="col s5"><h5>Codigo</h4></div>
			<div class="col s7"><h5>: {{ $docente->codigo }}</h5></div>
		@endif

		<div class="col s5"><h5>Email</h4></div>
		<div class="col s7"><h5>: {{ $docente->email }}</h5></div>

		@if($docente->telefono)
			<div class="col s5"><h5>Telefono</h4></div>
			<div class="col s7"><h5>: {{ $docente->telefono }}</h5></div>
		@endif

		@if($docente->celular)
			<div class="col s5"><h5>Celular</h4></div>
			<div class="col s7"><h5>: {{ $docente->celular }}</h5></div>
		@endif		
	</div>
</div>
@endsection
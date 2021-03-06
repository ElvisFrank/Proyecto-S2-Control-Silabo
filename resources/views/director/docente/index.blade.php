@extends('template.main')

@section('title-body','DOCENTE')
@section('content')
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
          <a class="btn-floating waves-effect waves-light green darken-4" href="{{ route('director.docente.index') }}"><i class="material-icons">update</i></a>
      </div>
    </div>
    <div class="col s12 m3 right-align">
        <span>Agregar <a class="btn-floating waves-effect waves-light modal-trigger red darken-4" href="#docente-create"><i class="material-icons">person_add</i></a></span>
    </div>
</div>

      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>Codigo</th>
              <th>Apellidos</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          @foreach($docentes as $docente)
          <tr>
            <td>{{ $docente->codigo }}</td>
            <td>{{ $docente->paterno." ".$docente->materno }}</td>
            <td>{{ $docente->nombre }}</td>
            <td>{{ $docente->email }}</td>
            <td>
                <a class="btn-floating waves-effect waves-light green darken-4" href="{{ route('director.docente.edit',$docente->id) }}"><i class="material-icons">edit</i></a>
                <a class="btn-floating waves-effect waves-light red darken-4" href="{{ route('director.docente.destroy',$docente->id) }}" onclick="return confirm('Seguro que desea Eliminar?')"><i class="material-icons">delete</i></a>
                <a class="btn-floating waves-effect waves-light blue darken-4" href="{{ route('director.docente.show',$docente->id) }}"><i class="material-icons">remove_red_eye</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
@extends('template.main')

@section('title-body','Mis Cursos')
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
          <a class="btn-floating waves-effect waves-light green darken-4" href="{{ route('director.silabo.index') }}"><i class="material-icons">update</i></a>
      </div>
  </div>

      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>Curso</th>
              <th>Codigo</th>
              <th>Semestre</th>
              <th>Opciones del Silabo</th>
          </tr>
        </thead>

        <tbody>
         @foreach($cursos as $curso)
          <tr>
            <td>{{ $curso->curso_nombre }}</td>
            <td>{{ $curso->curso_codigo }}</td>
            <td>{{ $curso->semestre }}</td>
            <td class="row">
              <a class="none waves-effect waves-light right-align"
                onclick="event.preventDefault();
                document.getElementById('silaboAddForm').submit();">
                <i class="material-icons" style="color:#f57c00 ;">note_add</i>
              </a>
              <form id="silaboAddForm" action="{{ route('docente.curso.create') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                <input type="hidden" name="semestre_id" value="{{ $curso->semestre_id }}">
                <input type="hidden" name="curso_id" value="{{ $curso->curso_id }}">
              </form>
              <a class="none waves-effect waves-light right-align"><i class="material-icons" style="color: rgba(5, 100, 24, 1);">edit</i></a>
              <a class="none waves-effect waves-light right-align"><i class="material-icons" style="color: rgba(250, 0, 0, 1);">delete</i></a>
              <a class="none waves-effect waves-light right-align"><i class="material-icons" style="color: rgba(13,71,171, 1);">remove_red_eye</i></a>
            </td>
          </tr>
         @endforeach
       </tbody>
      </table>
</div>
@endsection
@extends('template.main')

@section('title-body',"$semestre->año - $semestre->numero")
@section('content')

  <!-- Modal Agregar curso.. -->
  <div id="semestre-show-add" class="modal">
    <div class="modal-content">      
      <div class="row">
          <form method="POST" action="{{ route('director.semestre.storeCurso') }}">
            {{ csrf_field() }}
            <input type="hidden" name="semestreId" value="{{ $semestre->id }}">
          <div class="row">

            <h5 class="center-align">Activar cursos para el semestre</h5>

            <div class="row">
                <div class="input-field col s8 offset-s2">
                    <select multiple required name="cursosActivados[]" id="curso_requisito">
                        <option value="" disabled selected>Seleccione los cursos</option>
                        @foreach($cursosdisponibles as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                        @endforeach
                    </select>
                    <label>Cursos  a activar</label>
                </div>
            </div>

            <div class="center-align col s12">
                <button type="submit" class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Registrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
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
          <a class="btn-floating waves-effect waves-light green darken-4"><i class="material-icons">update</i></a>
      </div>
    </div>
    <div class="col s12 m3 right-align">
        <span>Agregar <a class="btn-floating waves-effect waves-light modal-trigger red darken-4" href="#semestre-show-add"><i class="material-icons">add</i></a></span>
    </div>
</div>

      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nombre del curso</th>
              <th>Remover</th>
              <th colspan="2">Docente(s)</th>
          </tr>
        </thead>

        <tbody>
          @foreach($semestre->cursos as $curso)
          <tr>
            <td>{{ $curso->codigo }}</td>
            <td>{{ $curso->nombre }}</td>
            <td><a class="none waves-effect waves-light right-align"><i class="material-icons" style="color: rgba(250, 0, 0, 1);">delete</i></a></td>
            <td>docente</td>
            <td>
                <a class="btn-floating waves-effect waves-light blue darken-4"><i class="material-icons">person_add</i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
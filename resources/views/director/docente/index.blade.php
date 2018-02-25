@extends('template.main')

@section('title-body','DOCENTE')
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
          <a class="btn-floating waves-effect waves-light green darken-4"><i class="material-icons">update</i></a>
      </div>
    </div>
    <div class="col s12 m3 right-align">
        <span>Agregar <a class="btn-floating waves-effect waves-light modal-trigger red darken-4" href="#docente-create"><i class="material-icons">add</i></a></span>
    </div>
</div>

      <table class="highlight responsive-table">
        <thead>
          <tr>
              <th>N</th>
              <th>Nombre del docente</th>
              <th>Apellidos</th>
              <th>Correo</th>
              <th>Acciones</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>01</td>
            <td>Julio Profe</td>
            <td>Yutu</td>
            <td>Yutu@email.com</td>
            <td>
                <a class="btn-floating waves-effect waves-light green darken-4"><i class="material-icons">edit</i></a>
                <a class="btn-floating waves-effect waves-light red darken-4"><i class="material-icons">delete</i></a>
                <a class="btn-floating waves-effect waves-light blue darken-4"><i class="material-icons">remove_red_eye</i></a>
            </td>
          </tr>
        </tbody>
      </table>

@endsection
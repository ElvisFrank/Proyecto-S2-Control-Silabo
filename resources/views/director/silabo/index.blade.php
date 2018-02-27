@extends('template.main')

@section('title-body','SILABOS')
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
              <th>Docente</th>
              <th>Curso</th>
              <th>Avance</th>
              <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
         @foreach($silabos1 as $silabo)	
          <tr>
            <td>{{ $silabo->docente }}</td>
            <td>{{ $silabo->curso }}</td>
            <td>Barra de avance</td>
            <td>
              <a class="btn-floating waves-effect waves-light green darken-4" href=""><i class="material-icons">library_books</i></a>
                <a class="btn-floating waves-effect waves-light red darken-4" href="{{ route('director.silabo.temaIndex',$silabo->id) }}" ><i class="material-icons">playlist_add_check</i></a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
</div>
@endsection
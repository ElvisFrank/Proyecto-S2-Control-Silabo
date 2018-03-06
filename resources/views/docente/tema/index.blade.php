@extends('template.main')

@section('title-body','Validar Temas del Curso')
@section('content')
<div class="row">
  <div class="col s12 m9 nav nav-wrapper">
        <form>
            <div class="input-field col s8">
                <select>
                    <option value="" disabled selected>Elija el curso</option>
                    <option value="1">Introduccion a la Ingeniería de Informática y Sistemas</option>
                    <option value="2">Taller de Programación I</option>
                    <option value="3">Algoritmos y Estructura de Datos</option>
                </select>
            </div>
            <div class="col s2 	">
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
                <th>Fecha</th>
                <th>Sesión</th>
                <th>Accion</th>
            </tr>
            </thead>

            <tbody>
            {{--   @foreach($sesiones as $sesion)	--}}
            <tr>
                <td>{{-- $sesion->fecha --}} 22/02/2018</td>
                <td>{{-- $sesion->codigo --}}Aqui estaría el tema de la primera unidad del curso seleccionado</td>
                <td>
                    <input type="checkbox" class="filled-in" id="filled-in-box" /><label for="filled-in-box">Validar</label>
                    <a class="none waves-effect waves-light right-align" onclick="return confirm('Seguro que desea Guardar?')"><i class="material-icons" style="color: rgba(5, 100, 24, 1);">save</i></a>
                    <a class="none waves-effect waves-light right-align"><i class="material-icons" style="color: rgba(13,71,171, 1);">comment</i></a>
                </td>
            </tr>
            <!-- repite el mismo tr para ejemplo de datos... al final se eliminara esto cuando se implemente el forech -->
            <tr>
                <td>{{-- $sesion->fecha --}} 22/02/2018</td>
                <td>{{-- $sesion->codigo --}}Aqui estaría el tema de la primera unidad del curso seleccionado</td>
                <td>
                    <input type="checkbox" class="filled-in" id="validacion" /><label for="validacion">Validar</label>
                    <a class="none waves-effect waves-light right-align" onclick="return confirm('Seguro que desea Guardar?')"><i class="material-icons" style="color: rgba(5, 100, 24, 1);">save</i></a>
                    <a class="none waves-effect waves-light right-align"><i class="material-icons" style="color: rgba(13,71,171, 1);">comment</i></a>
                </td>
            </tr>
            {{-- @endforeach --}}
            </tbody>
        </table>
</div>
@endsection
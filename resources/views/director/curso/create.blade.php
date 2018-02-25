@extends('template.main')

@section('title-body','CURSO')
@section('content')
<div class="row">
    <form class="col s12 m10 offset-m1" method="POST" action="{{ route('director.curso.store') }}">
            {{ csrf_field() }}
    	<div class="row">
    		<h5 class="left-align">Registro de creación de curso</h5>
    	</div>

        <div class="row">
            <div class="input-field col s12">
                <input id="nombre" name="nombre" type="text" class="validate" required>
                <label for="silabo_name">Nombre del curso</label>
            </div>
        </div>

        <div class="row">
            <div class="col s6 m3">
                <p class="">Codigo</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="codigo" id="codigo" class="validate" placeholder="Codigo" required>
            </div>
            <div class="col s6 m3">
                <p class="">Creditos</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="creditos" id="creditos" class="validate" placeholder="Creditos" required>
            </div>
        </div>

        <div class="row">
            <div class="col s6 m3">
                <p class="">Horas Teoricas</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="hora_teorica" id="hora_teorica" class="validate" placeholder="Horas Teoricas" required>
            </div>
            <div class="col s6 m3">
                <p class="">Horas prácticas</p>
            </div>
            <div class="col s6 m3">
                <input type="text" name="hora_practica" id="hora_practica" class="validate" placeholder="Horas prácticas" required>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <p class="">Sumilla</p>
            </div>
            <div class="col s11 offset-s1">
                <textarea id=sumilla"" name="sumilla" class="materialize-textarea validate" placeholder="Sumilla del curso" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">Área</p>
            </div>
            <div class="input-field col s6 l8">
                <select required name="area" id="area">
                    <option value="" disabled selected>Seleccione el area</option>
                    <option value="Departamento Academico de Ciencia en Informatica y Sistemas.">DACIS</option>
                    <option value="Ciencias basicas.">Ciencias Basicas</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">Curso requisito(s)</p>
            </div>
            <div class="input-field col s6 l8">
                <select multiple required name="curso_requisito[]" id="curso_requisito">
                    <option value="" disabled selected>Seleccione los cursos</option>
                    @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s6 m2">
                <p class="">Ciclo</p>
            </div>
            <div class="input-field col s6 m2">
                <select required name="ciclo" id="ciclo">
                    <option value="" disabled selected>...</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                    <option value="X">X</option>
                </select>
            </div>
            <div class="col s6 m3">
                <p class="">Caracter del curso</p>
            </div>
            <div class="input-field col s6 m5">
                <select required name="caracter" id="caracter">
                    <option value="" disabled selected>Seleccione una opcion</option>
                    <option value="Obligatorio">Obligatorio</option>
                    <option value="Electivo">Electivo</option>
                </select>
            </div>
        </div>

        <div class="center-align">
            <button type="submit" class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Guardar</button>
        </div>
        <br>
    </form>
  </div>

@endsection
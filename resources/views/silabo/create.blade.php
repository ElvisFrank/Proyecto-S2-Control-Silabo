@extends('template.main')

@section('title-body','SÍLABO')
@section('js')
<script type="text/javascript">
$(document).ready(function() {
  $('.stepper').activateStepper();
})
</script>
@endsection
@section('content')
<div class="row">
  <div class="row">
    <div class="col s6 right-align">UNIDAD</div>
    <div class="col s6 left-align input-field"><input class="col s2" type="text" name=""></div>
    <div class="row">
      <div class="col s10 input-field validate"></div>
    </div>
  </div>
{{-- 
    <form class="col s12 l10 offset-l1 card-panel hoverable">
        <div class="row">
            <div class="input-field col s12">
                <input id="silabo_name" type="text" class="validate">
                <label for="silabo_name">Nombre del curso</label>
            </div>
        </div>
        <div class="row">
            <h5 class="left-align">I. DATOS INFORMATIVOS</h5>
        </div>
        <div class="row">
            <div class="col s12 l4">
                <p class="">1.1 Área</p>
            </div>
            <div class="col s11 l8 offset-s1">
                <input type="text" name="" id="" class="validate" placeholder="Área">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.2 Código</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Código">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.3 Ciclo</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Ciclo">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.4 Créditos</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Créditos">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.5 Semestre Académico</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Semestre Académico">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.6 Duración</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Duración del semestre en semanas">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.7 Horas de Contacto Semanal</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Numero de horas totales de clases a la semana">
            </div>
        </div>

        <div class="row">
            <div class="col s5 l3 offset-s1 offset-l1">
                <p class="">1.7.1 Horas de teoría</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Horas de sesiones teoricas a la semana">
            </div>
        </div>

        <div class="row">
            <div class="col s5 l3 offset-s1 offset-l1">
                <p class="">1.7.2 Horas de práctica</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Horas de sesiones prácticas a la semana">
            </div>
        </div>

        <div class="row">
            <div class="col s6 l4">
                <p class="">1.8 Horas de Trabajo Independiente</p>
            </div>
            <div class="col s6 l8">
                <input type="text" name="" id="" class="validate" placeholder="Horas a la semana que el estudiante debe dedicar al curso fuera de clases">
            </div>
        </div>

        <div class="row">
            <div class="col s12 l4">
                <p class="">1.9 Requisito(s)</p>
            </div>
            <div class="col s12 l8">
                <input type="text" name="" id="" class="validate" placeholder="Cursos requisitos para el curso">
            </div>
        </div>

        <div class="row">
            <div class="col s12 l4">
                <p class="">1.10 Escuela Profesional</p>
            </div>
            <div class="col s11 l8 offset-s1">
                <input type="text" name="" id="" class="validate" placeholder="Escuela profesional">
            </div>
        </div>

        <div class="row">
            <div class="col s12 l4">
                <p class="">1.11 Docente</p>
            </div>
            <div class="col s11 l8 offset-s1">
                <input type="text" name="" id="" class="validate" placeholder="Docente del curso">
            </div>
        </div>

        <div class="row">
            <div class="col s12 l4">
                <p class="">1.12 Texto Basico</p>
            </div>
            <div class="col s11 l8 offset-s1">
                <input type="text" name="" id="" class="validate" placeholder="Texto de referencia al curso">
            </div>
        </div>

        <div class="row">
            <div class="col s12 l4">
                <p>1.13 Numero Maximo de Estudiantes</p>
            </div>              
            <div class="col s11 l8 offset-s1">
                    <div class="input-field inline col s6">
                        <input type="text" name="" id="" class="validate">              
                        <label>En sesiones Teoricas</label>
                    </div>
                    <div class="input-field inline col s6">
                        <input type="text" name="" id="" class="validate">
                        <label>En sesiones Prácticas</label>
                    </div>
            </div>
        </div>
        <div class="row">
            <h5>II. SUMILLA</h5>
            <div class="col s11 offset-s1">
                <textarea id="" name="" class="materialize-textarea validate" placeholder="Sumilla del curso"></textarea>
            </div>
        </div>
        <div class="row">
            <h5>III. COMPETENCIA</h5>
            <div class="col s12">
                <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripción"></textarea>
            </div>
        </div>
        
        <div class="row">
            <div class="col S12">
                <p>3.1 COMPETENCIAS ESPECÍFICAS</p>
            </div>
            <div class="col s11 offset-s1">
                <div class="row">
                    <div class="input-field col s3">
                        <input type="text" name="" id="">
                        <label for="">Codigo</label>
                    </div>
                    <div class="col s9">
                        <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s3">
                        <input type="text" name="" id="">
                        <label for="">Codigo</label>
                    </div>
                    <div class="col s9">
                        <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s3">
                        <input type="text" name="" id="">
                        <label for="">Codigo</label>
                    </div>
                    <div class="col s9">
                        <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col S12">
                    <p>3.2 CAPACIDADES</p>
                </div>
                <div class="col s11 offset-s1">
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="" id="">
                            <label for="">Codigo</label>
                        </div>
                        <div class="col s9">
                            <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="" id="">
                            <label for="">Codigo</label>
                        </div>
                        <div class="col s9">
                            <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="" id="">
                            <label for="">Codigo</label>
                        </div>
                        <div class="col s9">
                            <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                        </div>
                    </div>
                </div>
            </div>      
        
            <div class="row">
                <div class="col S12">
                    <p>3.3 ACTITUDES</p>
                </div>
                <div class="col s11 offset-s1">
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="" id="">
                            <label for="">Codigo</label>
                        </div>
                        <div class="col s9">
                            <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="" id="">
                            <label for="">Codigo</label>
                        </div>
                        <div class="col s9">
                            <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="" id="">
                            <label for="">Codigo</label>
                        </div>
                        <div class="col s9">
                            <textarea id="" name="" class="materialize-textarea validate" placeholder="Descripcion de la competencia"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center-align">
                <a class="waves-effect waves-light btn blue"><i class="material-icons left">save</i>Guardar</a>
            </div>
        </div> 
    </form> --}}
</div>

@endsection
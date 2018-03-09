@extends('template.main')

@section('title-body','Creación de silabo: '.$curso->nombre)
@section('content')
<ul class="stepper horizontal">
   <li class="step active">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>I. INFORMACIÓN GENERAL</h5>
          <!--             
            <div class="input-field col s12">
               <input id="email" name="email" type="email" class="validate" required>
               <label for="first_name">Your e-mail</label>
            </div>
           -->

            <div class="col s12">
                <div class="col s12 l4">
                    <p class="">1.1 Área</p>
                </div>
                <div class="col s11 l8 offset-s1">
                    <input type="text" name="" id="area" class="validate" required value="{{ $curso->area }}" disabled>
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.2 Código</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" required value="{{ $curso->codigo }}" disabled>
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.3 Ciclo</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" required value="{{ $curso->ciclo }}" disabled>
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.4 Créditos</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" required value="{{ $curso->creditos }}" disabled>
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.5 Semestre Académico</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" required value="{{ $semestre->nombre }}" disabled>
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.6 Duración</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" placeholder="Duración del semestre en semanas">
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.7 Horas de Contacto Semanal</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" placeholder="Numero de horas totales de clases a la semana">
                </div>
            </div>

            <div class="col s12">
                <div class="col s5 l3 offset-s1 offset-l1">
                    <p class="">1.7.1 Horas de teoría</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" placeholder="Horas de sesiones teoricas a la semana">
                </div>
            </div>

            <div class="col s12">
                <div class="col s5 l3 offset-s1 offset-l1">
                    <p class="">1.7.2 Horas de práctica</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" placeholder="Horas de sesiones prácticas a la semana">
                </div>
            </div>

            <div class="col s12">
                <div class="col s6 l4">
                    <p class="">1.8 Horas de Trabajo Independiente</p>
                </div>
                <div class="col s6 l8">
                    <input type="text" name="" id="" class="validate" placeholder="Horas a la semana que el estudiante debe dedicar al curso fuera de clases">
                </div>
            </div>

            <div class="col s12">
                <div class="col s12 l4">
                    <p class="">1.9 Requisito(s)</p>
                </div>
                <div class="col s12 l8">
                    <input type="text" name="" id="" class="validate" placeholder="Cursos requisitos para el curso">
                </div>
            </div>

            <div class="col s12">
                <div class="col s12 l4">
                    <p class="">1.10 Escuela Profesional</p>
                </div>
                <div class="col s11 l8 offset-s1">
                    <input type="text" name="" id="" class="validate" placeholder="Escuela profesional">
                </div>
            </div>

            <div class="col s12">
                <div class="col s12 l4">
                    <p class="">1.11 Docente</p>
                </div>
                <div class="col s11 l8 offset-s1">
                    <input type="text" name="" id="" class="validate" placeholder="Docente del curso">
                </div>
            </div>

            <div class="col s12">
                <div class="col s12 l4">
                    <p class="">1.12 Texto Basico</p>
                </div>
                <div class="col s11 l8 offset-s1">
                    <input type="text" name="" id="" class="validate" placeholder="Texto de referencia al curso">
                </div>
            </div>

            <div class="col s12">
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
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>II. SUMILLA</h5>
            <div class="input-field col s12">
               <input id="password" name="password" type="password" class="validate" required>
               <label for="password">Your password</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>III. COMPETENCIAS</h5>
            <div class="input-field col s12">
               <input id="password2" name="password2" type="password" class="validate" required>
               <label for="password2">Your password2</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>IV. PROGRAMACIÓN DE CONTENIDOS</h5>
            <div class="input-field col s12">
               <input id="password3" name="password3" type="password" class="validate" required>
               <label for="password3">Your password3</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>V. PROCEDIMIENTOS DIDÁCTICOS</h5>
            <div class="input-field col s12">
               <input id="password4" name="password4" type="password" class="validate" required>
               <label for="password4">Your password4</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>VI. VIAJE DE PRACTICAS (VISITAS TÉCNICAS)</h5>
            <div class="input-field col s12">
               <input id="password5" name="password5" type="password" class="validate" required>
               <label for="password5">Your password5</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>VII. MEDIOS Y MATERIALES EDUCATIVOS</h5>
            <div class="input-field col s12">
               <input id="password6" name="password6" type="password" class="validate" required>
               <label for="password6">Your password6</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
         <div class="row">
          <h5>VIII. EVALUACIÓN</h5>
            <div class="input-field col s12">
               <input id="password7" name="password7" type="password" class="validate" required>
               <label for="password7">Your password7</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
            <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect"></div>
      <div class="step-content">
        <div class="row">
          <h5>IX. BIBLIOGRAFÍA</h5>
        </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn" type="submit">SUBMIT</button>
         </div>
      </div>
   </li>
</ul>
@endsection
@section('js')
<script type="text/javascript">
  $(function(){
    $('.stepper').activateStepper();
  });
</script>
@endsection
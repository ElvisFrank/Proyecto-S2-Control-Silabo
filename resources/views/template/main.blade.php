<?php

    $tema='Sistema de Control de Silabo';
    $color="blue darken-4";
    $colorPag="blue darken-4";
    $textPag="blue-text text-lighten-5";
    $textPagT="blue-text text-lighten-2";
    $colorDiv="blue darken-3";
    $colorText="blue-grey-text text-lighten-2";

    $textSid="collapsible-header waves-effect blue-grey-text text-lighten-4";//para color del texto sidebar

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Control de Silabo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Stilos de la pagina..
  ================================================== -->
  @include('template.partials.style')

</head>
<body>
  {{--  --}}
  @include('template.partials.modal')

  <header>
    @include('template.partials.nav')
  </header>

  <main>
{{-- 
    <div class="parallax-container">
      <div class="parallax"><img src="{{ asset('img/biblioteca-dark.jpg') }}"></div>
    </div> --}}
    <h3 class="center-align card-panel hoverable">@yield('title-body')</h3>
     @yield('home')
    <div class="container" style="min-height: 29rem;">
       
      <!-- Contenido de la pagina..
      ================================================== -->
      @include('flash::message')
      @yield('content')
      <br>
      <br>
      <br>
    </div>
    <div class="parallax-container" id="parallax-footer">
      <div class="parallax"><img src="{{ asset('img/biblioteca-dark.jpg') }}"></div>
    </div>

  </main>
  <footer>
    <div>
      <!-- Footer de la pagina..
      ================================================== -->
      @include('template.partials.footer')      
    </div>
  </footer>

	<!-- Script's..
	================================================== -->
	@include('template.partials.script')

</body>
</html>
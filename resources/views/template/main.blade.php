@extends('template.root')
@section('content-main')
    <div class="container" style="min-height: 29rem;">
       
      <!-- Contenido de la pagina..<div class="row" style="min-height: 29rem;margin-right: 5px;margin-left: 5px;">
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
@endsection

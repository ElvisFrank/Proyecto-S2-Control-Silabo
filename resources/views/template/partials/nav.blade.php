<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content {{ $color }}">
  <li><a href="">Ver Perfil</a></li>
  <li><a href="">Editar Perfil</a></li>
  <li class="divider {{ $colorDiv }}"></li>
  <li><a href="">Cerrar Sesión</a></li>
</ul>


<!-- El contenerdor del sideNav -->
  @include('template.partials.side-nav')

<div class="navbar-fixed">
  <nav class="{{ $colorPag }}">
    <div class="nav-wrapper">

      <a href="{{ url('/') }}" class="hide-on-large-only" style="font-size: 1.8rem;">{{ $tema }}</a>

      <a href="#" data-activates="side-nav-pagina" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        <li><a class="modal-trigger {{ $textPag }}" href="#modal-inicio-sesion">Iniciar sesion</a></li>
        <li><a class="dropdown-button {{ $textPag }}" href="#!" data-activates="dropdown1"><div class="chip"><img src="{{ asset('img/perfil.jpg') }}" alt="Photo Profile">Nombre de usuario</div><i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

    </div>
  </nav>
</div>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content {{ $color }}">
  @auth
  <li><a href="{{ route('perfil.show',Auth::user()) }}">Ver Perfil</a></li>
  <li><a href="{{ route('perfil.edit',Auth::user()->id) }}">Editar Perfil</a></li>
  <li class="divider {{ $colorDiv }}"></li>
  <li><a href="{{ url('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();
    ">Cerrar Sesión</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
  </li>
  @endauth
</ul>


<!-- El contenerdor del sideNav -->
  @include('template.partials.side-nav')

<div class="navbar-fixed">
  <nav class="{{ $colorPag }}">
    <div class="nav-wrapper">

      <a href="{{ url('/') }}" class="hide-on-large-only" style="font-size: 1.8rem;">{{ $tema }}</a>

      <a href="#" data-activates="side-nav-pagina" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul class="right hide-on-med-and-down">
        @guest
        <li><a class="modal-trigger {{ $textPag }}" href="{{ route('login') }}">Iniciar sesion</a></li>
        @endguest
        @auth
        <li><a class="dropdown-button {{ $textPag }}" href="#!" data-activates="dropdown1"><div class="chip"><img src="{{ asset('img/perfil.jpg') }}" alt="Photo Profile">{{ Auth::user()->nombre.' '.Auth::user()->paterno.' '.Auth::user()->materno }}</div><i class="material-icons right">arrow_drop_down</i></a></li>
        @endauth
      </ul>

    </div>
  </nav>
</div>
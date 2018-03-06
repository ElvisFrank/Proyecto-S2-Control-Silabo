

      {{-- SideNar Para la pagina --}}

<ul class="side-nav fixed {{ $color }}" id="side-nav-pagina">
        <li><div class="user-view">
          <div class="background">
            <img class="responsive-img" src="{{ asset('img/viento.jpg') }}">
          </div>
          <a href="{{ route('home') }}"><span class="white-text name"><br><br><br>{{ $tema }}</span></a>
        </div></li>
        
        {{-- Mostrar solo cuando esta modo mobil.. --}}
        @guest
        <li class="hide-on-large-only"><a class="modal-trigger {{ $textSid }}" href="{{ route('login') }}">Iniciar sesion</a></li>
        @endguest
        @auth
        <li class="hide-on-large-only no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="{{ $textSid }}">{{ Auth::user()->nombre }}<i class="material-icons right">arrow_drop_down</i></a>
              <div class="collapsible-body {{ $color }}">
                <ul class="left-align">
                  <li><a class="{{ $textSid }}" href="{{ route('perfil.show',Auth::user()) }}">Ver Perfil</a></li>
                  <li><a class="{{ $textSid }}" href="{{ route('perfil.edit',Auth::user()->id) }}">Editar Perfil</a></li>
                  <li class="divider  {{ $colorDiv }}"></li>
                  <li><a class="{{ $textSid }}" href="{{ url('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();
                    ">Cerrar Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="hide-on-large-only"><div class="divider {{ $colorDiv }}"></div></li>
        {{-- END.. Mostrar solo cuando esta modo mobil.. --}}

		
		{{-- SideNav del director --}}
    @if(DB::table('persona_role')
      ->join('roles','roles.id','persona_role.role_id')
      ->where('persona_role.persona_id','=',Auth::user()->id)
      ->where('roles.nombre','=','Director')
      ->first()
      )
        <li><a href="{{ route('director.semestre.index') }}" class="{{ $textSid }}">Semestres</a></li>
        <li><a href="{{ route('director.curso.index') }}" class="{{ $textSid }}">Cursos</a></li>
        <li><a href="{{ route('director.docente.index') }}" class="{{ $textSid }}">Docentes</a></li>   
        <li><a href="{{ route('director.silabo.index') }}" class="{{ $textSid }}">Silabos</a></li>        
        <li class="divider {{ $colorDiv }}"></li>
        {{-- END SideNav del director --}}
    @endif

		{{-- SideNav del Docente --}}
    @if(DB::table('persona_role')
      ->join('roles','roles.id','persona_role.role_id')
      ->where('persona_role.persona_id','=',Auth::user()->id)
      ->where('roles.nombre','=','Docente')
      ->first()
      )
        <li><a href="{{ route('docente.curso.index') }}" class="{{ $textSid }}">Mis cursos</a></li>
        <li><a href="{{ route('docente.tema.index') }}" class="{{ $textSid }}">Mis temas</a></li>      
        <li class="divider {{ $colorDiv }}"></li>
        {{-- END SideNav del Docente --}}
    @endif

		{{-- SideNav del Delegado --}}
    @if(DB::table('persona_role')
      ->join('roles','roles.id','persona_role.role_id')
      ->where('persona_role.persona_id','=',Auth::user()->id)
      ->where('roles.nombre','=','Delegado')
      ->first()
      )
        <li><a href="{{ route('delegado.curso.index')}}" class="{{ $textSid }}">Mis cursos</a></li>    
        <li class="divider {{ $colorDiv }}"></li>
        {{-- END SideNav del Delegado --}}
    @endif

        @endauth
        <li><a href="" class="{{ $textSid }}">Ayuda</a></li>
</ul>
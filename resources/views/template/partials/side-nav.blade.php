

      {{-- SideNar Para la pagina --}}

<ul class="side-nav fixed {{ $color }}" id="side-nav-pagina">
        <li><div class="user-view">
          <div class="background">
            <img class="responsive-img" src="{{ asset('img/viento.jpg') }}">
          </div>
          <a href="{{ url('/') }}"><span class="white-text name"><br><br><br>{{ $tema }}</span></a>
        </div></li>
        
        {{-- Mostrar solo cuando esta modo mobil.. --}}
        <li class="hide-on-large-only"><a class="modal-trigger {{ $textSid }}" href="#modal-inicio-sesion">Iniciar sesion</a></li>
        <li class="hide-on-large-only no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="{{ $textSid }}">Nombre de Usuario<i class="material-icons right">arrow_drop_down</i></a>
              <div class="collapsible-body {{ $color }}">
                <ul class="left-align">
                  <li><a class="{{ $textSid }}" href="{{ url('/') }}">Perfil</a></li>
                  <li><a class="{{ $textSid }}" href="{{ url('/') }}">Editar</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="hide-on-large-only"><div class="divider {{ $colorDiv }}"></div></li>
        {{-- END.. Mostrar solo cuando esta modo mobil.. --}}

		
		{{-- SideNav del director --}}
        <li><a href="{{ route('director.semestre.index') }}" class="{{ $textSid }}">Semestres</a></li>
        <li><a href="{{ route('director.curso.index') }}" class="{{ $textSid }}">Cursos</a></li>
        <li><a href="{{ route('director.docente.index') }}" class="{{ $textSid }}">Docentes</a></li>   
        <li><a href="{{ route('director.silabo.index') }}" class="{{ $textSid }}">Silabos</a></li>        
        <li class="divider {{ $colorDiv }}"></li>
        {{-- END SideNav del director --}}

		{{-- SideNav del director --}}
        <li><a href="" class="{{ $textSid }}">Mis cursos</a></li>
        <li><a href="" class="{{ $textSid }}">Mis temas</a></li>      
        <li class="divider {{ $colorDiv }}"></li>
        {{-- END SideNav del director --}}

		{{-- SideNav del director --}}
        <li><a href="" class="{{ $textSid }}">Mis cursos</a></li>    
        <li class="divider {{ $colorDiv }}"></li>
        {{-- END SideNav del director --}}

        <li><a href="" class="{{ $textSid }}">Ayuda</a></li>
</ul>
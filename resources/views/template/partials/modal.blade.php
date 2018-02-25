  <!-- Modal Inicio de sesion -->
  <div id="modal-inicio-sesion" class="modal">
    <div class="modal-content">
      <h4>Inicio de Sesion</h4>
      <form>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="" id="codigo" type="text" class="validate">
            <label for="codigo">Codigo</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input placeholder="" id="contraseña" type="password" class="validate">
            <label for="contraseña">Contraseña</label>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">Cancelar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-primary">Iniciar Sesion</a>
    </div>
  </div>

  <!-- Modal Registro de semestre -->
  <div id="semestre-create" class="modal">
    <div class="modal-content">      
      <div class="row">
          <form class="col s12 m10 l8 offset-l2 offset-m1" method="POST" action="{{ route('director.semestre.store') }}">
            {{ csrf_field() }}
            <div class="row center-align"><h4>Registro de Semestre</h4></div>
            <div class="row">
              <div class="col s6 m2 offset-m1">
                <p class="">AÑO</p>
              </div>
              <div class="col s6 m3">
                <input type="text" name="año" id="año" class="validate" placeholder="AÑO">
              </div>
                  <div class="col s6 m2 offset-m1">
                      <p class="">NÚMERO</p>
                  </div>
                  <div class="col s6 m3">
                      <input type="text" name="numero" id="numero" class="validate" placeholder="NÚMERO">
                  </div>
            </div>

              <div class="center-align">
                  <button type="submit" class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Guardar</button>
              </div>
              <br>
          </form>
        </div>
    </div>
  </div>

  
  <!-- Modal Registro de Docente -->
  <div id="docente-create" class="modal">
    <div class="modal-content">      
      <div class="row">
          <form class="col s12 l10 offset-l1" method="POST" action="{{ route('director.docente.store') }}">
            {{ csrf_field() }}
          <div class="row">
            <h5 class="left-align">DATOS BASICOS PARA ACTIVAR CUENTA</h5>
          </div>

            <div class="row">
                <div class="col s6 l4">
                    <p class="">Correo Electrónico</p>
                </div>
                <div class="col s6 l8">
                    <input type="email" name="email" id="email" class="validate" placeholder="Correo Electrónico">
                </div>
            </div>

          <div class="row">
            <div class="col s6 l4">
              <p class="">Contraseña</p>
            </div>
            <div class="col s6 l8">
              <input type="password" name="password" id="password" class="validate" placeholder="Contraseña">
            </div>
          </div>

            <div class="center-align">
                <button type="submit" class="waves-effect waves-light btn blue center-align"><i class="material-icons left">save</i>Registrar</button>
            </div>
            <br>
        </form>
      </div>
    </div>
  </div>

  


  
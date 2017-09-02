<!-- Container (Talleres encuesta Section) -->
<div id="encuesta-talleres" class="container-fluid bg-grey">
  <div class="container">
    <h2 class="text-center">¿DESEAS ENROLARTE EN NUESTROS TALLERES DE DESARROLLO DE SOFTWARE?</h2>
    <div class="row">
      <div class="col-sm-12 text-center">
        <p>Nos encantaría saber de ti y así poder armar un grupo con personas como tu.</p>
        <p>Déjanos tus datos y pronto estaremos en contacto contigo.</p>
      </div>
      <div class="col-md-6 text-center">
        <img class="img-responsive" src="<?php echo APP_PATH."images/CARTEL_TALLERES_SEPTIEMBRE.png"?>" title="Talleres de desarrollo de software Septiembre" alt="Cartel Talleres de desarrollo de software Septiembre">
      </div>
      <div class="col-md-6">
          <div class="row">
            <div class="col-sm-12 slideanim">
              <form id="talleres-email">
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <label for="nivel">Nivel</label>
                    <select class="form-control" id="nivel" name="nivel">
                      <option value="jr">Jr.</option>
                      <option value="intermedio">Intermedio</option>
                      <option value="senior">Senior</option>
                    </select>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="tecnologias">Tecnologías</label>
                    <select class="form-control" id="tecnologias" name="tecnologias">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 form-group">
                    <label for="nivel">Horario</label>
                    <select class="form-control" id="horario" name="horario">
                      <option value="manana">Mañana</option>
                      <option value="tarde">Tarde</option>
                      <option value="noche">Noche</option>
                    </select>
                  </div>
                  <div class="col-sm-6 form-group">
                    <label for="tecnologias">Días</label>
                    <select class="form-control" id="dias" name="dias">
                      <option value="jr">Lunes - Viernes</option>
                      <option value="intermedio">Lunes - Miercoles - Viernes</option>
                      <option value="intermedio">Martes - Jueves</option>
                      <option value="senior">Sabados Intensivo</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                  </div>
                  <div class="col-sm-4 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                  </div>
                  <div class="col-sm-4 form-group">
                    <input class="form-control" id="phone" name="phone" placeholder="Teléfono" type="phone" required>
                  </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Déjanos tus comentarios" rows="5"></textarea><br>
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    nivel = $('#nivel');
    tecnologias = $('#tecnologias');

    nivel.change(function(e) {
      e.preventDefault();

      options = $(this).val();
      switch(options){
        case 'jr':
              tecnologias.html( "<option>HTML5, CSS 3, JavaScript</option>" +
                                "<option>PUG, Stylus, SASS</option>" + 
                                "<option>PHP Básico</option>" + 
                                "<option>Java</option>" );
        break;
        case 'intermedio':
              tecnologias.html( "<option>AngularJS</option>" + 
                                "<option>Bootstrap 4</option>" + 
                                "<option>Bases de datos relacionales</option>" + 
                                "<option>Bases de datos no relacionales</option>" + 
                                "<option>Cordova</option>" + 
                                "<option>PHP Intermedio</option>" + 
                                "<option>JQUERY</option>" + 
                                "<option>Introducción a Android</option>" );
        break;
        case 'senior':
              tecnologias.html( "<option>Angular</option>" + 
                                "<option>MEAN</option>" + 
                                "<option>MEAN 2</option>" + 
                                "<option>IONIC 3</option>" + 
                                "<option>SLIM</option>" + 
                                "<option>PHP Avanzado</option>" + 
                                "<option>Laravel</option>" + 
                                "<option>Loopback</option>" );
        break;
      }
    });
    nivel.change();
  });
</script>

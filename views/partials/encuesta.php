<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <div class="container">
    <h2 class="text-center">¿DESEAS APRENDER MÁS SOBRE EL DESARROLLO DE SOFTWARE?</h2>
    <div class="row">
      <div class="col-sm-12 text-center">
        <p>Nos encantaría escucharte y así poder armar un grupo con personas como tu.</p>
        <p>Dejanos tus datos y nos pondremos en contacto.</p>
        <br>
      </div>




      <div class="col-sm-12 slideanim">
        <form id="form-email">
          <div class="row">
            <div class="col-sm-6 form-group">
              <label for="nivel">¿Que nivel te gustaría aprender?</label>
              <select class="form-control" id="nivel">
                <option value="jr">Jr.</option>
                <option value="intermedio">Intermedio</option>
                <option value="senior">Senior</option>
              </select>
            </div>
            <div class="col-sm-6 form-group">
              <label for="tecnologias">¿Qué tecnología elegirías?</label>
              <select class="form-control" id="tecnologias">
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
          <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea><br>
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

<script type="text/javascript">
  $(document).ready(function(){


    nivel = $('#nivel');
    tecnologias = $('#tecnologias');

    nivel.change(function(e)
    {

      options = $(this).val();


      switch(options){
        case 'jr':
              tecnologias.html("<option>HTML, CSS, JavaScript</option><option>PUG, Stylus, SASS</option><option>Java</option>");
        break;
        case 'intermedio':
              tecnologias.html("<option>Angular</option><option>Bootstrap</option><option>Introducción a Android</option>");
        break;
        case 'senior':
              tecnologias.html("<option>SLIM</option><option>Laravel</option><option>Loopback</option>");
        break;
      }



    });

  });
</script>

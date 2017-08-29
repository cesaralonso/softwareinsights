<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#top"><img src="<?php echo APP_PATH; ?>images/Imagotipo.png" class="logo-nav" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo (($view === 'oferta-laboral-y-becarios') ? APP_PATH.'#about' : '#about'); ?>">NOSOTROS</a></li>
        <li><a href="<?php echo (($view === 'oferta-laboral-y-becarios') ? APP_PATH.'#services' : '#services'); ?>">SERVICIOS</a></li>
        <li><a href="<?php echo (($view === 'oferta-laboral-y-becarios') ? APP_PATH.'#ubicacion' : '#ubicacion'); ?>">UBICACIÓN</a></li>
        <li <?php echo (($view === "oferta-laboral-y-becarios") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH.'servicios/oferta-laboral-y-becarios'; ?>">VACANTES</a></li>
        <li><a href="<?php echo (($view === 'oferta-laboral-y-becarios') ? APP_PATH.'#contact' : '#contact'); ?>">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</nav>

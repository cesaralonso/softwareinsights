<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo (($view === 'oferta-laboral-y-becarios') ? APP_PATH.'index.php#top' : '#top'); ?>"><img src="<?php echo APP_PATH; ?>images/Imagotipo.png" class="logo-nav" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">NOSOTROS</a></li>
        <li><a href="#services">SERVICIOS</a></li>
        <li><a href="#ubicacion">UBICACIÓN</a></li>
        <li><a href="#contact">CONTACTO</a></li>
        <li><a href="<?php echo APP_PATH.'vacantes/oferta-laboral-y-becarios'; ?>">VACANTES</a></li>
      </ul>
    </div>
  </div>
</nav>

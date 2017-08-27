<nav class="navbar navbar-default navbar-fixed-top">
  <div class="">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo APP_PATH; ?>"><img src="<?php echo APP_PATH; ?>images/Imagotipo.png" class="logo-nav" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li <?php echo (($view === "home") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>">HOME</a></li>
        <li <?php echo (($view === "software-a-la-medida") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/software-a-la-medida">SOFTWARE A LA MEDIDA</a></li>
        <li <?php echo (($view === "seo") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/seo">SEO</a></li>
        <li <?php echo (($view === "talleres") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/talleres">TALLERES</a></li>
        <li <?php echo (($view === "capacitaciones") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/capacitaciones">CAPACITACIONES</a></li>
        <li <?php echo (($view === "diseno-web-y-movil") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/diseno-web-y-movil">DISEÑO WEB Y MÓVIL</a></li>
        <li <?php echo (($view === "outsourcing") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/outsourcing">OUTSOURCING</a></li>
        <li <?php echo (($view === "hosting-y-dominios") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/hosting-y-dominios">HOSTING Y DOMINIOS</a></li>
        <li <?php echo (($view === "consultorias") ? "class='active'" : ''); ?>><a href="<?php echo APP_PATH; ?>servicios/consultorias">CONSULTORIAS</a></li>
      </ul>
    </div>
  </div>
</nav>
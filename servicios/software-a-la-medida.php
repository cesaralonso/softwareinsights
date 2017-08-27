<!DOCTYPE html>
<html lang="en">
<head>
  <title>Software a la medida Software Insights</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include('../includes/nav-pages.php'); ?>

<header class="row">
  <div class="col-xs-12">
    <div class="cover pagina-interna" id="section1">
      <div class="centrado-porcentual">
        <h1 class="animated slideInDown">Software a la medida</h1>
      </div>
    </div>
  </div>
</header>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <h2>SOFTWARE A LA MEDIDA</h2><br>
        <h4>Creamos sitios web que sean los más adecuados para cubrir tus necesidades, también te ayudamos a ubicar cual es la solución perfecta para tu empresa o idea.</h4><br>
        <p>
            <ul>
                <li>Sitios web</li>
                <li>Administradores de contenido a la medida o instalables (Wordpress, Joomla, Magento, etc)</li>
                <li>Sistemas para control de procesos internos en tu empresa</li>
                <li>Tiendas en línea a la medida o instalables (Ecommerce, Magento, Opencart, etc)</li>
                <li>Apps móviles (Android nativas)</li>
                <li>Apps híbridas (Android, IOS, Windows Phone y web en uno)</li>
            </ul>
        </p>
      </div>
    </div>
    </div>
</div>

<?php include('../includes/form-contact-me.php'); ?>

<?php include('../includes/own-clients.php'); ?>

<!-- Container (Pricing Section)
<div id="pricing" class="container-fluid">
  <div class="container"> 
    <div class="text-center">
      <h2>Precios</h2>
      <h4>Escoge un plan de pagos para ti</h4>
    </div>
    <div class="row slideanim">
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Basic</h1>
          </div>
          <div class="panel-body">
            <p><strong>20</strong> Lorem</p>
            <p><strong>15</strong> Ipsum</p>
            <p><strong>5</strong> Dolor</p>
            <p><strong>2</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$19</h3>
            <h4>per month</h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Pro</h1>
          </div>
          <div class="panel-body">
            <p><strong>50</strong> Lorem</p>
            <p><strong>25</strong> Ipsum</p>
            <p><strong>10</strong> Dolor</p>
            <p><strong>5</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$29</h3>
            <h4>per month</h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12">
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <h1>Premium</h1>
          </div>
          <div class="panel-body">
            <p><strong>100</strong> Lorem</p>
            <p><strong>50</strong> Ipsum</p>
            <p><strong>25</strong> Dolor</p>
            <p><strong>10</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
          </div>
          <div class="panel-footer">
            <h3>$49</h3>
            <h4>per month</h4>
            <button class="btn btn-lg">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<?php include('../includes/footer.php'); ?>

<script>
$(document).ready(function(){

  $("#form-contact-me").submit(function(e){
      e.preventDefault();

      var $form = $(this);
      var $inputs = $form.find("input, select, button, textarea");
      var serializedData = $form.serialize();
      $inputs.prop("disabled", true);
      request = $.ajax({
          url: "../server/contactme-email-send.php",
          type: "post",
          data: serializedData
      })
      .done(function (response, textStatus, jqXHR){
          response = JSON.parse(response);
          alert(response.msg);
      })
      .fail(function (jqXHR, textStatus, errorThrown){
          console.error(
              "The following error occurred: "+
              textStatus, errorThrown
          );
      })
      .always(function () {
          $inputs.prop("disabled", false);
      });
  });
  
})
</script>

</body>
</html>

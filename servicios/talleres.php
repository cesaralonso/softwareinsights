<!DOCTYPE html>
<html lang="en">
<head>
  <title>Talleres Software Insights</title>
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
        <h1 class="animated slideInDown">Talleres</h1>
      </div>
    </div>
  </div>
</header>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <h2>TALLERES</h2><br>
        <h4>Creación de aplicaciones web completas con consumo de API's.</h4><br>
        <p>
            <ol>
                <li>Creación de aplicaciones web completas con consumo de API's' eligiendo de las siguientes tecnologías:
                  <ul>
                      <li>API: LOOPBACK, EXPRESS, PHP SLIM O LARAVEL</li>
                      <li>BASE DE DATOS: MYSQL, MONGODB, FIREBASE</li>
                      <li>MAQUETADO: HTML5, BOOTSTRAP, SCSS, GULP</li>
                      <li>JAVASCRIPT</li>
                      <li>FRAMEWORS: ANGULARJS, ANGULAR 4, LARAVEL, PHP NATIVO</li>
                      <li>LIBRERÍAS: JQUERY</li>
                  </ul>
                </li>
                <li>Creación de un Content Managment System (CMS) eligiendo de las siguientes tecnologías:
                  <ul>
                    <li>PHP</li>
                    <li>LARAVEL</li>
                    <li>ANGULAR 4</li>
                    <li>INCLUYENDO:</li>
                    <li>JAVASCRIPT, JQUERY, BOOSTRAP</li>
                  </ul>
                </li>
                <li>Creación de una aplicación híbrida en tiempo real con IONIC 3 eligiendo:
                  <ul>
                    <li>FIREBASE</li>
                    <li>NODE, EXPRESS Y SOCKET IO </li>
                  </ul>
                </li>
                <li>Creación de un sitio web con CMS de forma nativa (old style) con:
                  <ul>
                    <li>PHP</li>
                    <li>HTML5</li>
                    <li>CSS</li>
                    <li>JAVASCRIPT</li>
                    <li>JQUERY</li>
                    <li>BOOTSTRAP</li>
                  </ul>
                </li>
            </ol>
        </p>
      </div>
    </div>
    </div>
</div>

<?php include('../includes/form-contact-me.php'); ?>

<?php include('../includes/own-clients.php'); ?>

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

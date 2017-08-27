<!DOCTYPE html>
<html lang="en">
<head>
  <title>Capacitaciones Software Insights</title>
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
        <h1 class="animated slideInDown">Capacitaciones</h1>
      </div>
    </div>
  </div>
</header>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <h2>CAPACITACIONES</h2><br>
        <h4>Capacitamos a tu personal y a cualquier persona que desee tener conocimientos sólidos sobre las siguientes tecnologías, herramientas y metodologías:</h4><br>
        <p>
          <ul>
              <li>METODOLOGÍAS ÁGILES
                <ul>
                  <li>SCRUM</li>
                  <li>GIT</li>
                  <li>REPOSITORIOS CON GITHUB / BITBUCKET</li>
                  <li>DEPLOYS CON HEROKU / DIGITAL OCEAN</li>
                  <li>ATLASSIAN JIRA</li>
                  <li>TESTING / QA</li>
                </ul>
              </li>
              <li>PHP
                <ul>
                  <li>LARAVEL</li>
                </ul>
              </li>
              <li>JAVASCRIPT
                <ul>
                  <li>ANGULARJS</li>
                  <li>JQUERY</li>
                  <li>AJAX</li>
                </ul>
              </li>
              <li>TYPESCRIPT
                <ul>
                  <li>ANGULAR (2/4)</li>
                </ul>
              </li>
              <li>API’S
                <ul>
                  <li>PHP SLIM</li>
                  <li>LARAVEL</li>
                  <li>EXPRESS</li>
                  <li>LOOPBACK</li>
                </ul>
              </li>
              <li>MAQUETACIÓN
                <ul>
                  <li>HTML5</li>
                  <li>CSS</li>
                  <li>SCSS</li>
                  <li>BOOSTRAP 4</li>
                </ul>
              </li>
              <li>GULP</li>
              <li>NODE, NPM Y BOWER</li>
              <li>STACK MEAN 1</li>
              <li>STACK MEAN 2</li>
              <li>BASES DE DATOS
                <ul>
                  <li>MYSQL</li>
                  <li>MONGODB</li>
                  <li>FIREBASE</li>
                </ul>
              </li>
              <li>APLICACIONES HÍBRIDAS Y EN TIEMPO REAL
                <ul>
                  <li>IONIC 3</li>
                  <li>FIREBASE</li>
                  <li>NODE, EXPRESS Y SOCKET IO</li>
                </ul>
              </li>
              <li>SEO</li>
              <li>PROTOTIPADO (MOCKUPS)</li>
          </ul>
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

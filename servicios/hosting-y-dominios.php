<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hosting y Dominios Software Insights</title>
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
        <h1 class="animated slideInDown">Hosting y Dominios</h1>
      </div>
    </div>
  </div>
</header>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <h2>HOSTING Y DOMINIOS</h2><br>
        <h4>Servicio de renta, administración y configuración de servidores y dominios.</h4><br>
        <p>
          <ol>
            <li>Servicio de venta y manejo de renta de hosting, teniendo las siguientes opciones en servidores web:
              <ul>
                <li>Configuración de servidores Apache con Linux</li>
                <li>Configuración de servidores dedicados AWS</li>
                <li>Configuración de servidores para hospedar aplicaciones Node con Digital Ocean</li>
              </ul>
            </li>
            <li>
              Administración, renta y sugerencias de dominios (www.minegocio.com) para tu negocio, tomando en cuenta si buscas colarte en los primeros lugares de resultados de búsquedas.
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

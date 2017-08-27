<!DOCTYPE html>
<html lang="en">
<head>
  <title>SEO Search Engine Optimization Software Insights</title>
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
        <h1 class="animated slideInDown">SEO (Search Engine Optimization)</h1>
      </div>
    </div>
  </div>
</header>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <h2>SEO (SEARCH ENGINE OPTIMIZATION)</h2><br>
        <h4>Reestructuración de un sitio web existente que carezca o necesite ayuda para que puedan los buscadores más populares indexarlo con la mayor cantidad posible de palabras clave en sus resultados de búsqueda, quedando en los primeros lugares de resultados de búsqueda.</h4><br>
        <p>
            Se aplican en un sitio web un conjunto de técnicas diseñadas específicamente para lograr la indexación del mayor número de palabras claves posibles en los buscadores más populares como Google y Bing para lograr colocar un sitio web de manera orgánica en los primeros lugares de resultados de búsquedas.
        </p>
        <p>Manejo de Google Analitycs.</p>
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

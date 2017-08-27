<!DOCTYPE html>
<html lang="en">
<head>
  <title>Outsourcing Software Insights</title>
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
        <h1 class="animated slideInDown">Outsourcing</h1>
      </div>
    </div>
  </div>
</header>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="container"> 
    <div class="row">
      <div class="col-sm-12">
        <h2>OUTSOURCING</h2><br>
        <h4>Te proporcionamos un equipo de profesionales especializado y capacitado en  desarrollo ágil mediante la metodología Scrum.</h4><br>
        <p>
          Incluimos el siguiente personal siendo a tu consideración el número de elementos, el cuál garantizará que los tiempos y costos de desarrollo serán muy bajos y con resultados de alta calidad:
            <ul>
                <li>Scrum owner (requerido)</li>
                <li>Scrum master (requerido)</li>
                <li>Scrum team (2 programadores mínimo requeridos)</li>
                <li>Tester (1 mínimo no requerido)</li>
                <li>Diseñador UX/UI (1 no requerido)</li>
                <li>Documentador (1 no requerido)</li>
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

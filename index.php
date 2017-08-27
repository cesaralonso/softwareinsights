<?php include('./includes/top.php'); ?>
<?php include('./includes/configuration.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php echo $title; ?> Software Insights</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $descripction; ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo APP_PATH; ?>css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php include("includes/".(($view === 'home') ? 'nav-main.php' : 'nav-pages.php')); ?>

<?php include("views/$view.php"); ?>

<?php include('includes/own-clients.php'); ?>

<?php include('includes/form-contact.php'); ?>

<?php include('includes/footer.php'); ?>

<script>
$(document).ready(function(){

  $("#form-contact-me").submit(function(e){
      e.preventDefault();

      var $form = $(this);
      var $inputs = $form.find("input, select, button, textarea");
      var serializedData = $form.serialize();
      $inputs.prop("disabled", true);
      request = $.ajax({
          url: "./server/contactme-email-send.php",
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

  $("#form-email").submit(function(e){
      e.preventDefault();

      var $form = $(this);
      var $inputs = $form.find("input, select, button, textarea");
      var serializedData = $form.serialize();
      $inputs.prop("disabled", true);
      request = $.ajax({
          url: "./server/email-send.php",
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

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>

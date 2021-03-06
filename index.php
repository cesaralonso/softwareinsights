<?php include('./core/top.php'); ?>
<?php include('./core/configuration.php'); ?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title><?php echo $title; ?> Software Insights</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="icon" href="<?php echo APP_PATH; ?>favicon.jpg" type="image/x-icon" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo APP_PATH; ?>css/estilos.css" rel="stylesheet">
    <link href="<?php echo APP_PATH; ?>css/normalize.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body id="top" data-spy="scroll" data-target=".navbar" data-offset="60">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-105582098-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.softwareinsights.com.mx",
      "logo": "http://softwareinsights.herokuapp.com/images/insight.png",
      "name": "Software Insights",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+52-341-41-270-30",
        "contactType": "customer service"
      }
    }
    </script>
    <?php include("views/partials/".(($view === 'home') ? 'nav-main.php' : (($view === 'oferta-laboral-y-becarios') ? 'nav-vacantes.php' : 'nav-pages.php'))); ?>
    <?php include("views/$view.php"); ?>
    <?php include('views/partials/form-contact-me.php'); ?>
    <?php include('views/partials/own-clients.php'); ?>
    <?php include('views/partials/form-contact.php'); ?>
    <?php include('views/partials/footer.php'); ?>
    <script src="<?php echo APP_PATH.'/js/'.(($view === 'home') ? 'home.js' : 'servicios.js'); ?>"></script>
  </body>
</html>

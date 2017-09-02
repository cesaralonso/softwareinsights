
$(document).ready(function(){


  $("#talleres-email").submit(function(e){
      e.preventDefault();

      var $form = $(this);
      var $inputs = $form.find("input, select, button, textarea");
      var serializedData = $form.serialize();
      $inputs.prop("disabled", true);
      request = $.ajax({
          url: "../server/talleres-email-send.php",
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

  $("#form-email").submit(function(e){
      e.preventDefault();

      var $form = $(this);
      var $inputs = $form.find("input, select, button, textarea");
      var serializedData = $form.serialize();
      $inputs.prop("disabled", true);
      request = $.ajax({
          url: "../server/email-send.php",
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
  $(".navbar a, footer a[href='#top']").on('click', function(event) {
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
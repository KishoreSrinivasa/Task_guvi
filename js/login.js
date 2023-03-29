
  $(document).ready(function() {
    $("#submitBtn").click(function(event) {
      event.preventDefault();
      
      // collect form data
      var name = $("#user").val();
      var pass = $("#pass").val();
      //alert(firstname);
      // send form data using AJAX
      $.ajax({
        type: "POST",
        url: "php/login.php",
        data: {
          user: name,
          pass: pass
        },
        success: function() {
          alert("successfully login...");
          window.location.href = "profile.html";
        }
      });
    });
  });
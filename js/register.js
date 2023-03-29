$(document).ready(function() {
  $("#submitBtn").click(function(event) {
    event.preventDefault();
    
    // collect form data
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#email").val();
    var contact  = $("#contact").val();
    var pass = $("#pass").val();
    //alert(firstname);
    // send form data using AJAX
    $.ajax({
      type: "POST",
      url: "php/register.php",
      data: {
        fname: firstname,
        lname: lastname,
        email: email,
        phone: contact,
        pass: pass
      },
      success: function(response) {
        alert(response);
        window.location.href = "login.html";
      }
    });
  });
});

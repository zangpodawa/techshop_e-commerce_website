$(document).ready(function () {
  $("#login").click(function (e) {
    e.preventDefault();
    let email = $("#email").val().trim();
    let password = $("#password").val().trim();

    $.ajax({
      url: "./database/queries/process_login.php",
      type: "POST",
      data: {
        email,
        password,
      },
      success: function (data) {
        if (data !== "Login success") {
          $.notify(data, "error");
        } else {
          window.location = `${baseURL}/index.php`;

          return;
        }
      },
    });

    $("#registration-form").submit();
  });
});

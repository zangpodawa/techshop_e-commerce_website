const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};

$(document).ready(function () {
  $("#submit-registration").click(function (e) {
    e.preventDefault();
    let name = $("#name").val().trim();
    let email = $("#email").val().trim();
    let password = $("#password").val().trim();
    let confirmPassword = $("#confirm-password").val().trim();
    let acceptAllTerms = $("#checkbox").is(":checked");

    if (!name || !email || !password || !confirmPassword) {
      $.notify("Please submit all information", "error");
      return;
    }

    if (password !== confirmPassword) {
      $.notify("Password & confirm password do not match ", "error");
      return;
    }
    if (!validateEmail(email)) {
      $.notify("Email address not is valid", "error");
      return;
    }
    if (!acceptAllTerms) {
      $.notify("You must accept all terms & condition", "error");
      return;
    }

    $.ajax({
      url: `./database/queries/process_registration.php`,
      type: "POST",
      data: {
        name,
        email,
        password,
        confirm_password: confirmPassword,
        accept_all_terms: acceptAllTerms,
      },
      success: function (data) {
        if (data !== "Registered") {
          $.notify(data, "error");
        } else {
          window.location = `${baseURL}/registered.php`;
        }
      },
    });

    // $("#registration-form").submit();
  });
});

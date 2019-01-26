$("#username").on("keyup", () => {
  var username = escape(document.getElementById("username").value);
  var usernameArray = username.split("");
  console.log(usernameArray);

  if (usernameArray.length <= 5) {
    for (var index = 0; index < usernameArray.length; index++) {
      if (usernameArray[index] == usernameArray[index].toLowerCase()) {
        $("#helpId").html("Clear");
      } else {
        $("#helpId").html("5 karakter pertama menggunakan huruf kecil");
        break;
      }
    }
  } else if (usernameArray.length == 6) {
    if (usernameArray[5] == "_" || usernameArray[5] == ".") {
      $("#helpId").html("Clear");
    } else {
      $("#helpId").html(
        "Karakter ke-6 menggunakan underscore(_) atau titik(.)"
      );
    }
  } else if (usernameArray.length >= 7) {
    for (var index = 6; index < usernameArray.length; index++) {
      if (usernameArray[index] == usernameArray[index].toUpperCase()) {
        $("#helpId").html("Clear");
      } else {
        $("#helpId").html(
          "Karakter ke-7 dan ke-8  menggunakan underscore(_) atau titik(.)"
        );
        break;
      }
    }
  } else {
    $("#helpId").html("Minimal 8 karakter");
  }
});

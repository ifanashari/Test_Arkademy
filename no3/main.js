function drawDelta() {
  var showResult = "";
  var limiter = document.getElementById("limiter").value;
  if (limiter <= 10) {
    for (var counter = 1; counter <= limiter; counter++) {
      for (var counterValue = 1; counterValue <= counter; counterValue++) {
        showResult += counterValue.toString() + ", ";
      }
      showResult += "<br/>";
    }
    document.getElementById("result").innerHTML = showResult;
  } else {
    alert("Panjang deret tidak boleh lebih dari 10");
    document.getElementById("result").innerHTML = "";
  }
}

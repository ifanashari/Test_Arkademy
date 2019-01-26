function countHandShake() {
  var handShake = document.getElementById("handShake").value;
  var upperResult = handShake;
  var result;
  if (handShake > 2) {
    for (var upperCounter = handShake; upperCounter > 0; upperCounter--) {
      if (upperResult !== upperCounter) {
        upperResult = upperResult * upperCounter;
      } else {
        upperResult = upperCounter;
      }
    }

    var lowerResult = handShake - 2;
    for (var lowerCounter = handShake - 2; lowerCounter > 0; lowerCounter--) {
      if (lowerResult !== lowerCounter) {
        lowerResult = lowerResult * lowerCounter;
      } else {
        lowerResult = lowerCounter;
      }
    }
    result = upperResult / (2 * lowerResult);
    document.getElementById("result").innerHTML = "<h3>" + result + "</h3>";
  } else if (handShake == 2) {
    document.getElementById("result").innerHTML = "<h3>" + 1 + "</h3>";
  } else {
    alert("Jumlah tamu harus lebih dari 1");
  }
}

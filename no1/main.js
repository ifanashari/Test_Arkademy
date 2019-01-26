function returnData() {
  var data = {
    itemId: "12341822",
    itemName: "basic t-shirt",
    price: 70000,
    availableColorAndSize: [
      { color: "red", size: ["S", "M", "L"] },
      { color: "solid black", size: ["M", "L"] }
    ],
    freeShiping: false
  };

  return JSON.stringify(data);
}

document.getElementById("returnJson").innerHTML = returnData();
console.log(returnData);

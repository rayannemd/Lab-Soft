function calcIMC() {
  var weight = parseFloat(document.getElementById("weight").value);
  var height = parseFloat(document.getElementById("height").value);

  var imc = weight / (height * height);

  document.getElementById("result").innerHTML = imc.toFixed(2);
  document.getElementById("result_imc").value = imc.toFixed(2);
}

function clearFields() {
  document.getElementById("weight").value = "";
  document.getElementById("height").value = "";
  document.getElementById("result").innerHTML = "";
}


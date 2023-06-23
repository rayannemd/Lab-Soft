function calcIAC() {
  var height = parseFloat(document.getElementById("height").value);
  var hipCircumference = parseFloat(
    document.getElementById("hipCircumference").value
  );

  var iac = hipCircumference / (height * Math.sqrt(height)) - 18;

  console.log(iac);

  document.getElementById("result").innerText = iac.toFixed(2);
  document.getElementById("result_iac").value = iac.toFixed(2);
}

function clearFields() {
  document.getElementById("hipCircumference").value = "";
  document.getElementById("height").value = "";
  document.getElementById("result").innerHTML = "";
}

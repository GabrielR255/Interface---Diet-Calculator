document.getElementById('result').style.display = 'none';
document.getElementById('InputMacro').style.display = 'none'; 
document.getElementById('macroblock').style.display = 'none'; 
document.getElementById('backbutton01').style.display = 'none'; 
document.getElementById('buttonmacro').style.display = 'none';

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault(); 

  
  var muscle = parseFloat(document.getElementById("GCE").value);

  if (isNaN(muscle)) {
    alert("Por favor, insira um valor válido para o GCE.");
    return;
  }

  var vinte = 20;
  var cem = 100;
  var soma = (muscle * vinte) / cem;
  var result = muscle + soma;

  document.getElementById("value").textContent = result.toFixed(2);

  document.getElementById("result").style.display = 'block'; 
  document.getElementById("backbutton01").style.display = 'block'; 
  document.getElementById("buttonmacro").style.display = 'block'; 
  document.getElementById("muscle-on").style.display = 'inline';
});

document.getElementById("buttonmacros").addEventListener("click", function() {
  document.getElementById("InputMacro").style.display = 'block';
  document.getElementById("confirmar").style.display = 'block';
});

document.getElementById("confirmar").addEventListener("click", function() {
  var peso = parseFloat(document.getElementById("macroinput").value);

  if (isNaN(peso)) {
    alert("Por favor, insira um valor válido para o peso.");
    return;
  }

  var proteinaValor = parseFloat(document.getElementById("proteina").getAttribute("value"));
  var carboidratoValor = parseFloat(document.getElementById("carboidrato").getAttribute("value"));
  var gorduraValor = parseFloat(document.getElementById("gordura").getAttribute("value"));

  var proteinaTotal = (proteinaValor * peso).toFixed(2);
  var carboidratoTotal = (carboidratoValor * peso).toFixed(2);
  var gorduraTotal = (gorduraValor * peso).toFixed(2);

  document.getElementById("proteina").textContent = "Proteína: " + proteinaTotal + "g";
  document.getElementById("carboidrato").textContent = "Carboidrato: " + carboidratoTotal + "g";
  document.getElementById("gordura").textContent = "Gordura: " + gorduraTotal + "g";

  document.getElementById("macroblock").style.display = "block";
  document.getElementById('backbutton').style.display = 'block';


});

document.getElementById("backbutton01").addEventListener('click', function() {
  document.getElementById("result").style.display = 'none';
  document.getElementById("InputMacro").style.display = "none";
  document.getElementById("macroblock").style.display = "none";
  document.getElementById("backbutton01").style.display = 'none'; 
  document.getElementById("buttonmacro").style.display = 'none'; 
  document.getElementById("confirmar").style.display = "none";

  document.getElementById('GCE').value = '';
  document.getElementById('macroinput').value = '';
});

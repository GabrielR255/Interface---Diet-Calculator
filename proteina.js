document.getElementById('result').style.display = 'none'; // Oculta o resultado inicialmente

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

var peso = parseFloat(document.getElementById("peso").value)
var protein = 2;

var result = peso * protein;

document.getElementById("value").textContent = result.toFixed(2) + "    Gramas";


  document.getElementById("result").style.display = 'block'; 
  document.getElementById("backbutton").style.display = 'block'; 
  document.getElementById("muscle-on").style.display = 'inline'; 
});

document.getElementById("backbutton01").addEventListener('click', function() {
  
  document.getElementById("result").style.display = 'none'; 
  document.getElementById("backbutton").style.display = 'none'; 

  // Limpando os campos de input
  document.getElementById('peso').value = '';
  document.getElementById('altura').value = '';
  document.getElementById('idade').value = '';

  // Limpando o valor do resultado (TMB)
  document.getElementById("value").textContent = '';

  // Escondendo o texto "Meu TMB"
  document.getElementById("protein-on").style.display = 'none';

  window.scrollTo(0, 0);
});

document.getElementById('result').style.display = 'none'; 

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

var gordura = parseFloat(document.getElementById("peso").value);
var gramafat = 1.2;

var result= gordura * gramafat;

document.getElementById("value"). textContent= result.toFixed(2) + "    Gramas";


  document.getElementById("result").style.display = 'block'; 
  document.getElementById("backbutton").style.display = 'block'; 
  document.getElementById("muscle-on").style.display = 'inline'; 
});

document.getElementById("backbutton01").addEventListener('click', function() {
  
  document.getElementById("result").style.display = 'none'; 
  document.getElementById("backbutton").style.display = 'none'; 

  document.getElementById('peso').value = '';
  document.getElementById('altura').value = '';
  document.getElementById('idade').value = '';

  document.getElementById("value").textContent = '';

  document.getElementById("fat-on").style.display = 'none';

  window.scrollTo(0, 0);
});

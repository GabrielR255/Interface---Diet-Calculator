document.getElementById('result').style.display = 'none'; 

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

var tmbvalor = parseFloat(document.getElementById("tmb").value);
var nivelatv = parseFloat(document.getElementById("Dropbox").value);
var result = tmbvalor * nivelatv;

document.getElementById("value").textContent = result.toFixed(2);



  
  document.getElementById("result").style.display = 'block'; 
  document.getElementById("backbutton").style.display = 'block';
  document.getElementById("GBMLabel").style.display = 'inline'; 
});

document.getElementById("backbutton01").addEventListener('click', function() {
  
  document.getElementById("result").style.display = 'none'; 
  document.getElementById("backbutton").style.display = 'none'; 

  document.getElementById('peso').value = '';
  document.getElementById('altura').value = '';
  document.getElementById('idade').value = '';

  document.getElementById("value").textContent = '';

  document.getElementById("tmbLabel").style.display = 'none';

  window.scrollTo(0, 0);
});

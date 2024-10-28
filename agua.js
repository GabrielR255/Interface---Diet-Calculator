document.getElementById('result').style.display = 'none';

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

  var peso = parseFloat(document.getElementById("peso").value);
  var ml = 35;

 
  var calcagua = peso * ml;

  document.getElementById("value").textContent = calcagua.toFixed(2) + ' ml de água por dia';


  document.getElementById("result").style.display = 'block'; 
  document.getElementById("backbutton").style.display = 'block'; 
  document.getElementById("tmbLabel").style.display = 'inline'; 
});

document.getElementById("backbutton01").addEventListener('click', function() {
 
  document.getElementById("result").style.display = 'none'; 
  document.getElementById("backbutton").style.display = 'none'; 

  document.getElementById('peso').value = '';

  document.getElementById("value").textContent = '';

  document.getElementById("tmbLabel").style.display = 'none';

  window.scrollTo(0, 0);
});

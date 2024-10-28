document.getElementById('result').style.display = 'none'; // Oculta o resultado inicialmente

document.getElementById('form').addEventListener('submit', function(event) {
  event.preventDefault();

  // Pegando os valores dos campos
  var altura = parseFloat(document.getElementById("altura").value)
  var peso = parseFloat(document.getElementById("peso").value);
  var idade = parseInt(document.getElementById("idade").value);

  // Verificando se os campos estão preenchidos
  if (!altura || !peso || !idade) {
      alert('Por favor, preencha todos os campos!');
      return;
  }

  // Fórmula para calcular o TMB para mulheres
  var tmb = (10 * peso) + (6.25 * altura) - (5 * idade ) - 161;

  // Exibindo o valor do TMB
  document.getElementById("value").textContent = tmb.toFixed(2);

  // Exibindo o resultado e o botão "Voltar"
  document.getElementById("result").style.display = 'block'; // Mostra o resultado
  document.getElementById("backbutton").style.display = 'block'; // Mostra o botão "Voltar"
  document.getElementById("tmbLabel").style.display = 'inline'; // Mostra o texto "Meu TMB"
});

document.getElementById("backbutton01").addEventListener('click', function() {
  // Ocultando o resultado e o botão "Voltar"
  document.getElementById("result").style.display = 'none'; // Esconde o resultado
  document.getElementById("backbutton").style.display = 'none'; // Esconde o botão "Voltar"

  // Limpando os campos de input
  document.getElementById('peso').value = '';
  document.getElementById('altura').value = '';
  document.getElementById('idade').value = '';

  // Limpando o valor do resultado (TMB)
  document.getElementById("value").textContent = '';

  // Escondendo o texto "Meu TMB"
  document.getElementById("tmbLabel").style.display = 'none';

  window.scrollTo(0, 0);
});

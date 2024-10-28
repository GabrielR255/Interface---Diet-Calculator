document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const peso = document.getElementById('peso').value;
        const altura = document.getElementById('altura').value / 100;

        const IMC = (peso / (altura * altura)).toFixed(2);

        var valor = document.getElementById("value");

        const informacoes = document.getElementById("informações");
        informacoes.classList.remove("hidden");

        let description = '';
        
        if (IMC < 18.5) {
            description = "Você está abaixo do peso ideal";
        } else if (IMC < 24.9) {
            description = "Você está relativamente bem!";
        } else if (IMC < 29.9) {
            description = "Você está acima do peso médio";
        } else if (IMC < 39.9) {
            description = "Cuidado, você está com o peso alto!";
        } else {
            description = "Cuidado, você está com obesidade mórbida!";
        }

        
        valor.textContent = IMC;
        document.getElementById("description").innerHTML = description;
            
        document.getElementById("backbutton").classList.remove("delete");
    });

    document.getElementById("backbutton01").addEventListener('click', function() {
        const informacoes = document.getElementById("informações");
        if (informacoes) {
            informacoes.classList.add("hidden"); 
        }

        const backButton = document.getElementById("backbutton");
        if (backButton) {
            backButton.classList.add("hidden");
        }

        document.getElementById('peso').value = '';
        document.getElementById('altura').value = '';
        
        window.scrollTo(0, 0);
    });
});

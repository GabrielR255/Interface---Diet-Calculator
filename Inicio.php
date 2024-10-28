

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homecalc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Interface Usuário</title>
</head>

<body>
<?php include 'header.php'; ?>


    <div class="blocototal">
        <div class="titulo">
            <center>
                <h3>Para começarmos, Iremos calcular primeiramente o seu perfil de Peso Ideal!</h3>
            </center>
        </div>
    </div>

    <!-- Início da div container -->
    <div class="container">
        <form id="form">
            <center>
                <h1 id="title">Calculadora - IMC</h1>
            </center>
            <div class="espaço"><span></span></div>
            <div class="input-area">
                <label for="Peso">Informe seu Peso (KG)</label>
                <div class="input-field">
                    <i class="fa-solid fa-dumbbell"></i>
                    <input type="number" id="peso" name="weight" required>
                </div>
            </div>
            <div class="espaçamento"><span></span></div>
            <div class="input-area2">
                <label class="filde01" for="Altura">Informe sua altura (M)</label>
                <div class="input-field2">
                    <i class="fa-solid fa-ruler"></i>
                    <input type="number" step="0.01" id="altura" name="height" required>
                </div>
            </div>
            <button class="butao1">Realizar cálculo</button>
            <center>
                <div class="blocolink">
                    <a class="alinks" href="Mais informações-IMC.php">Mais informações-IMC</a>
                    <i class="fa-solid fa-arrow-up-right-from-square" style="color: #ffffff;"></i>
                </div>
            </center>
            <div id="informações" class="hidden">
                <div id="result">
                    <div id="bmi">
                        <span id="value"></span>
                        <span>Meu IMC</span>
                    </div>
                    <div id="description"><span></span></div>
                </div>
            </div>
            <center>
                <div id="backbutton" class="delete">
                    <button id="backbutton01" class="backbutton01">Voltar</button>
                </div>
            </center>
        </form>
    </div>
   
    <?php include 'rodape.php'; ?>

    <script src="homecalc.js"></script>
</body>

</html>

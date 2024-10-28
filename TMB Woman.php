<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tmb woman.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>TMB</title>
</head>

<body>
<?php include 'header.php'; ?>

    <div class="Home-box">
<div class="img-home">
    <img src="TMB woman.svg" alt="tmbwoman">
</div>
<div class="container">
    <form id="form">

    <center>
        <h1 id="title">Calculadora - TMB</h1>
    </center>

    <div class="espaço">
        <span></span>
    </div>

    <div class="input-area">
        <label for="peso" class="filde01">Informe seu Peso (KG)</label>
        <div class="input-field">
            <i class="fa-solid fa-weight-hanging"></i>
            <input type="number" id="peso" name="height" required>
        </div>
    </div>

    <div class="espaço">
        <span></span>
    </div>

    <div class="input-area2">
        <label for="altura" class="filde01">Informe seu altura (m)</label>
        <div class="input-field2">
            <i class="fa-solid fa-text-height"></i>
            <input type="number" id="altura" name="weight" required>
        </div>
    </div>

    <div class="espaço">
        <span></span>
    </div>

    <div class="input-area2">
        <label for="idade" class="filde01">Informe sua Idade</label>
        <div class="input-field2">
            <i class="fa-regular fa-calendar-days"></i>
            <input type="number" id="idade" name="age" required>
        </div>
    </div>
    <center>
    <div class="blocolink">
        <a class="alinks" href="Mais informações sobre (TMB).php">Mais informações</a>
    </div>
</center>
    <button class="butao1" type="submit">Realizar cálculo</button>
    
    <center>
        <div id="informações">
            <div id="result" class="apagar">
                <div id="bmi">
                    <span id="value"></span>
                    <span id="tmbLabel">Meu TMB</span>
                </div>
                <div id="description"></div>
                <center>
                    <div id="backbutton" class="delete">
                        <button id="backbutton01" class="backbutton01" type="button">Voltar</button>                        
                    </div>
            
                </center>
            
            </div>
        </div>
        
        </div>
    </center>
    
    
</form>
</div>
</div>
</div>

<?php include 'rodape.php'; ?>
            
    <script src="tmb.js"></script>
</body>

</html>

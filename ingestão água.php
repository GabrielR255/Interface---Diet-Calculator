<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ingestão.css">
    
    <title>Ingestão de água</title>

</head>

<body>
<?php include 'header.php'; ?>

    <div class="Home-box">
        <div class="img-home">
            <img src="aguacal.svg" alt="aguacalc">
        </div>
        <div class="container">
            <form id="form">
        
            <center>
                <h1 id="title">Calculadora - Água</h1>
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
            <button class="butao1" type="submit">Realizar cálculo</button>
            
            <center>
                <div id="informações">
                    <div id="result" class="apagar">
                        <div id="bmi">
                            <span id="value"></span>
                            <span id="tmbLabel">Água Diária</span>
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


    <script src="agua.js"></script>
</body>

</html>


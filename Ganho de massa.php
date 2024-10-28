<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Ganho de massa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">    
    <title>Ganho de massa muscular</title>
</head>

<body>
<?php include 'header.php'; ?>

    <div class="Home-box">
        <div class="img-home">
            <img src="muscle.svg" alt="muscle">
        </div>
        <div class="container">
            <form id="form">
        
            <center>
                <i class="fa-sharp fa-solid fa-dumbbell fa-2xl" style="color: #ffffff;"></i>
                
                <span class="padding-title"></span>
                <div titulo>
                    <h1 id="title">Ganho de massa muscular</h1>
                </div>
            </center>
        
            <div class="espaço">
                <span></span>
            </div>
        
            <div class="input-area">
               
                <label for="tmb" class="filde01">Digite o valor Gasto calórico Energético</label>
                <div class="input-field"> 
                    <i class="fa-solid fa-person-walking" style="color: #000000;"></i>
                      <input type="number" id="GCE" name="GCE" required step="0.01">
                </div>
            </div>
        
           
          

            <button class="butao1" type="submit">Realizar cálculo</button>
            
            <center>
            <div class="blocolink">
                <a class="alinks" href="ganho de massa info.php">Mais informações</a>
            </div>
            <div class="blocolink">
                <a class="alinks" href="gasto calorico.php">Obter meu Gasto Calórico</a>
            </div>
        </center>
            <center>
                
                <form>
                <div id="informações">
                    <div id="result" class="apagar">
                        <div id="bmi">
                            <span id="value"></span>
                            <span id="muscle-on">Calorias para ganho de Massa Muscular <br> (Bulking)</span>
                        </div>
                        <div id="description"></div>
                       
                    
                    </div>
                    
                    <div id="buttonmacro" class="delete">
                        <button id="buttonmacros" class="buttonmacros" type="button">Obter-Macros</button>                        
                    </div>
                    <div class="delinput"  id="InputMacro">
                        <input type="number" placeholder="Digite seu peso"  id="macroinput" name="btm"  step="0.01">
                    </div>
                    <div id="buttonconfirm">
<button class="delinput01" id="confirmar">Confirmar</buitton>
                    </div>
                    <div id="macroblock" class="delinput02">
                        <span class="proteinablock" id="proteina" value="2"></span>
                        <br>
                        <span class="carboidratoblock" id="carboidrato" value="4"></span>
                        <br>
                        <span class="gordurablock" id="gordura" value="1.2"></span>
                    </div>
                    
                    <center>
                        <div id="backbutton" class="backbutton-container">
                            <button id="backbutton01" class="backbutton01" type="button">Voltar</button>
                        </div>
                        
                    </center>
        
                </div>
                
                </div>
            </center>
        </form>
            
        </form>
        </div>
        </div>
        </div>
        
        <?php include 'rodape.php'; ?>


     
    <script src="Ganho de massa.js"></script>
</body>

</html>

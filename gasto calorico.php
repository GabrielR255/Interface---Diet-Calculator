<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gasto calorico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">    
    <title>Gasto Calórico Basal</title>
</head>

<body>
    <?php include 'header.php'; ?>


    <div class="Home-box">
        <div class="img-home">
            <img src="stretch-animate.svg" alt="tmbman">
        </div>
        <div class="container">
            <form id="form">
        
            <center>
                <h1 id="title">Gasto calórico basal</h1>
            </center>
        
            <div class="espaço">
                <span></span>
            </div>
        
            <div class="input-area">
                <label for="tmb" class="filde01">Informe seu valor TMB</label>
                <div class="input-field"> 
                    <i class="fa-solid fa-person-walking" style="color: #000000;"></i>
                      <input type="number" id="tmb" name="tmb" required step="0.01">
                </div>
            </div>
        
            <div class="espaço">
                <span></span>
            </div>
        
            <div class="input-area2">
                <label for="altura" class="filde01">Nivel de Atividade Física</label>
              <select name="Dropbox" id="Dropbox">            
            <option id="sedentario" value="1.2">Sedentário (Exercício mínimo)</option>
            <option id="leve" value="1.375">Exercício Leve (1-3 dias por semana)</option>
              <option id="moderado" value="1.55">Exercício moderado (3-5 dias por semana)</option>
              <option id="intenso" value="1.725">Exercício intenso (6 a 7 dias da semana)</option>
              </select>
            </div>

            <button class="butao1" type="submit">Realizar cálculo</button>
            
            <center>
            <div class="blocolink01">
                <a class="alinks" href="gasto calorico info.php">Mais informações</a>
            </div>
            <div class="blocolink">
                <div class="Manlink">
                    <a class="alinks01" href="tmbman.php">Obter meu (TMB-MAN)</a>
                    <i class="fa-solid fa-mars" style="color: #00b3ff;"></i>
                </div>
               <div class="womanlink">
                <a class="alinks02" href="TMB Woman.php">Obter meu (TMB-Woman)</a>
                <i class="fa-sharp fa-solid fa-venus" style="color: #ff00d0;"></i>
               </div>
                
            </div>
        </center>

            <center>
                <div id="informações">
                    <div id="result" class="apagar">
                        <div id="bmi">
                            <span id="value"></span>
                            <span id="GBMLabel">Meu gasto calórico</span>
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
       
            
    <script src="gasto calorico.js"></script>
</body>

</html>

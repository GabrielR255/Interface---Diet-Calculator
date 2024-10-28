<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carboidrato.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">    
    <title>Cálculo de Carboidrato</title>
</head>

<body>
<?php include 'header.php'; ?>

    <div class="Home-box">
        <div class="img-home">
            <img src="Foodimg.svg" alt="muscle">
        </div>
        <div class="container">
            <form id="form">
        
            <center>
                <i class="fa-sharp fa-solid fa-plate-utensils fa-xl"></i>               
                <span class="padding-title"></span>
                <div titulo>
                    <h1 id="title">Ingestão - Carboidratos</h1>
                </div>
            </center>
        
            <div class="espaço">
                <span></span>
            </div>
        
            <div class="input-area">
               
                <label for="tmb" class="filde01">Digite o seu peso</label>
                <div class="input-field"> 
                    <i class="fa-solid fa-person-walking" style="color: #000000;"></i>
                      <input type="number" id="peso" name="peso" required step="0.01">
                </div>
            </div>
        
           
          

            <button class="butao1" type="submit">Realizar cálculo</button>
            
            <center>
            <div class="blocolink">
                <a class="alinks" href="carboidrato info.php">Mais informações</a>
            </div>
        </center>
            <center>
                <div id="informações">
                    <div id="result" class="apagar">
                        <div id="bmi">
                            <span id="value"></span>
                            <span id="carboidrato-on">Total de carboidrato diário</span>
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

     
            
    <script src="carboidrato.js"></script>
</body>

</html>

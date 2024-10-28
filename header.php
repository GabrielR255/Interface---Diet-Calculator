<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Para acessar a sessão e os dados do usuário logado
}

// Verifique se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html"); // Redireciona para a página de login se não estiver logado
    exit;
}

// Recupera o nome do usuário da sessão
// Recupera o email do usuário da sessão
if (isset($_SESSION['usuario_email'])) {
    $emailUsuario = $_SESSION['usuario_email'];
} else {
    $emailUsuario = "Usuário"; // Define um valor padrão caso o email não esteja na sessão
}


?>

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
    <header class="cabeçalho">
        <nav class="menu">
            <div class="Logo">
                <img src="Balança.png" alt="Balança">
            </div>
            <div class="div-list">
                <ul>
                    <li><a href="Inicio.php">Inicio</a></li>
                    <li class="Calculadora">
                        <a>Calculadoras</a>
                        <div class="dropdowncalc">
                            <a href="TMB Woman.php">Taxa Metabólica Basal (Mulher)</a>
                            <a href="tmbman.php">Taxa Metabólica Basal (Homem)</a>
                            <a href="Ganho de massa.php">Aumento de Massa Muscular</a>
                            <a href="Queima de gordura.php">Queima de gordura</a>
                            <a href="ingestão água.php">Ingestão de Água</a>
                        </div>
                    </li>
                    <li class="Macronutriente">
                        <a>Macronutrientes</a>
                        <div class="dropdownmacro">
                            <a href="proteina.php">Proteínas Diárias</a>
                            <a href="carboidrato.php">Carboidratos Diários</a>
                            <a href="gordura.php">Gordura</a>
                        </div>
                    </li>
                    <li><a href="gasto calorico.php">Gasto Calórico Energético</a></li>
                    <li><a href="Sobre.php">Sobre</a></li>
                    <li><?php echo "<h1>Olá, $emailUsuario !</h1>" ?></li>

                  
                    <a class="button-exit" href="logout.php">Sair</a>

                </ul>
            </div>
        </nav>
    </header>
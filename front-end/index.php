<?php

    include('../back-end/conexao.php');
 
    if(!isset($_SESSION)) {
        session_start();
    }


?>

<!DOCTYPE html>
<html lang="pt">


<head>

    <link rel="stylesheet" href="../css/index.css">
    <title>Fast Med Index</title>
        <h1 class="header">
            Fast Med Index
        </h1>
        <a href="logout.php">Sair</a>
    <meta charset="UTF-8">  

</head>
<main>
    <div>
        <!-- Apresenta os protuarios no qual o usuário possui -->
        <p class="texto">
            Veja seus prontuários
        </p>
    </div>
    <body>
    <div class="background">
        <a href="prontuario.html">Seu prontuario</a> </div>
    <div> 
        Seus Pontuarios
    </div>
    
    
    </body>
</main>


</html>
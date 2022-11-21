<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['senha'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"../front-end/index.php\">Entrar</a></p>");
}


?>
<?php

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

<<<<<<< HEAD
//header("Location: index.php");

    echo "logout concluido";
=======
header("Location: login.php");
>>>>>>> 27190d88fab5003ce7af96d9bf26b80f136b74f6

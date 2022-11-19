
<?php
include('../back-end/conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            };

            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];

            header("Location: inicial.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="../css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

</body>
<!-- Cabeçalho da pagina de login -->

<div class="header">    
    <div class="logo">
        <a></a>
    </div>
    <div class="header-right">
    </div>
</div>
<!-- Formulário do login  -->

 <form class="login" action=" " method="post" >

    <h2 class="intro" >Seja bem vindo ao FastMed. Caso não esteja cadastrado realize seu login na sessão <a href="cadastro.html">cadastro</a></h2>

    <label class="label_login" for="email">Insira seu email</label>
    <input class="input_login" type="email" id="email" name="email"/>

    <br>

    <label class="label_login" for="senha">Insira sua senha</label>
    <input class="input_password" type="password" id="senha" name="senha">

    <input class="login_butom" type="submit" value="Login" id="save">

 </form>
<body>
    
</html>
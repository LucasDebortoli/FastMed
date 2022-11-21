<?php
    
 if(isset($_POST['registro']))
 {
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];

 

if($email!= '' && $email!='');
{
 //Conexão sql
 $sql = "INSERT INTO usuario(email, senha) VALUES('$email', '$senha')";

 include_once('../back-end/conexao.php');

 $qry = mysqli_query($conn, $sql) or die("Erro em inserir as informações");

 if($qry)
 {
    echo "$email registrado com sucesso";
 }
}
}


?>


<!-- HTML do cadastro -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <!--Aqui apresenta a logo do aplicativo-->
    <div class="header">    
        <div class="logo">
            <a></a>
        </div>
        <div class="header-right">
        </div>
    </div>
    
     <form class="login" action="../back-end/conexao.php" method="post" >
        <!-- Formulário de login com todos os cadastros -->
    
        <h2 class="intro" >Seja bem vindo ao cadastro FastMed. Caso já possua uma conta acesse o <a href="index.php">login</a></h2>
    
        <label class="label_login" for="email">Insira seu email</label>
        <input class="input_login" type="email" id="email" name="email"/>
    
        <br>
    
        <label class="label_login" for="senha">Insira sua senha</label>
        <input class="input_password" type="password" id="senha" name="senha">

    
        <input class="login_butom" type="submit" value="registro" id="save">
    
     </form>
    <body>
        
    </html>
    
</body>
</html>
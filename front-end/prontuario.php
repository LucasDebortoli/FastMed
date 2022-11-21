<!DOCTYPE html>
<html lang="pt">
<head>

    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="header">    
        <div class="logo">
            <a></a>
        </div>
        <div class="header-right">
          <a href="index.php">Voltar</a>
        </div>
    </div>
         <h1>
        
    
    <!-- Formulário prontuario -->
    
            <form class="form" action="../back-end/conexao.php" method="post">
                <label class="form_label" for="nome">Insira seu Nome </label>
                <input class="form_input" type="text" id="nome" name="nome"/>
                <br>
    
                <label class="form_label" for="data_nasc">Data de nascimento</label>
                <input class="form_date" type="date" id="data_nasc" name="data_nasc"/>
                <br>
    
                <label class="form_label" for="sexo">Insira seu sexo</label>
                <select class="form_select" name="sexo" id="sexo">
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                </select>
                <br>
                <br>
    
              <div class="form_ende"> 
                
                <label class="form_label" for="endereço">Insira seu endereço</label>
                <br>
    
                <label class="form_label" for="Bairro">Bairro</label>
                    <input class="form_input" type="text" id="bairro" name="bairro" />
                    <br>
                <label  class="form_label" for="estado">Estado</label>
                    <select class="form_select" name="estado" id="estado">
                        <option value="Acre"> Acre</option>
                        <option value="Alagoas"> Alagoas</option>
                        <option value="Amapá"> Amapá</option>
                        <option value="Amazonas">  Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                
                    <br>
                        <label class="form_label" for="cidade">Cidade</label>
                        <input class="form_input" type="text" id="cidade" name="cidade">
    
                    </div>
                        <br>
                <label class="form_label" for="email">Insira seu email</label>
                <input class="form_input" type="email" id="email" name="email"/>
                <br>
                <label class="form_label" for="ctt_emergencia">Contato de emergencia</label>
                <input class="form_input" type="number" id="ctt_emergencia" name="ctt_emergencia" />
                <br>
                <label class="form_label" for="">Tipo sanguineo</label>
                <select class="form_select" name="tipo_sang" id="tipo_sang">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">0-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <br>
                <label class="form_label" for="tipo_alerg">Tipos de alergia</label>
                <input class="form_input" type="text" id="tipo_alergia" name="tipo_alergia" />
                <br>
                <label  class="form_label" for="tipos_doen">Tipos de doenças</label>
                <input class="form_input" type="text" id="tipo_doenca" name="tipo_doenca" />
                <br>
                <label class="form_label" for="remed_diario">Remedios de uso diário</label>
                <input class="form_input" type="text" id="remed_diario" name="remed_diario" />
                <br>
                <input class="form_buttom" type="submit" value="Salvar" id="save">
    
            </form>
        </h1>
    
    
    
</body>
</html>
    

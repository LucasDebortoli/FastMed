<?php  


$con = mysqli_connect("localhost", "root", "", "fastmed_bd") or die ("erro");  

$consulta = "SELECT * FROM prontuario"; 

?>  

  

<!DOCTYPE html>  

  <html>  

    <head>  

      <meta charset="UTF-8">  

      <title>prontuario</title>  

    </head>  

    <body>  

      <table border="1">  

        <tr>  

  <td>ID Paciente</td>  

  <td>Contato de emergencia</td>  

  <td>Tipos sanguineo</td>  

  <td>Tipos de alergia</td>  

  <td>Tipos de Doença</td> 

  <td>Remedios de uso diario</td>   

        </tr>  

 

       <?php $sql = mysqli_query($con, "SELECT * FROM prontuario") or die(mysqli_error($con)) ?> 

   <?php  while($dado = mysqli_fetch_assoc($sql)) { ?>	 

        <tr>  

          <td><?php echo $dado['id_prontuario']; ?></td>  

  <td><?php echo $dado['ctt_emergencia']; ?></td>  

  <td><?php echo $dado['tipo_sang']; ?></td>  

  <td><?php echo $dado['tipo_alergia']; ?></td>  

  <td><?php echo $dado['tipo_doenca']; ?></td>  

  <td><?php echo $dado['remed_diario']; ?></td> 
  

        </tr>  

        <?php } ?>  

      </table>  

    </body>  

</html> 
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <head>
   <title>Alteração de Paciente</title>
  </head>
  <body>
	 
  
   <?php 
     include "menu.php";
	 ?>

  <div class="container">  
  
     
	<?php
	   
	   //pegando o id do paciente para realizar a exclusao
	   $id=$_GET["id"];
	    
	
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
	     include ("conexao.php");
	   
		/*2-definindo o comando sql a ser usado */
		  $sql="delete from tb_paciente where id_paciente=$id";
	   
		/*3-executando o comando sql */ 
		$resultado=mysqli_query($con,$sql);
				 
		 
		/*4-conferindo se o registro foi excluido*/  
		if($resultado==true){
			echo"Exclusão feita com sucesso";
		}else{
			echo "Não foi possível realizar a exclusão";
		}
		
	   
    ?>
	
		
               
</body>
</html>
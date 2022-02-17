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
	   
	 
	   /*pegando os dados vindos do formulario */
	     $id=$_POST["id"];
		 $p=$_POST["paciente"];
		 $t=$_POST["tipoSanguineo"];
		 $f=$_POST["fatorRh"];
		 if (isset($_POST["convenio"]))
			 $conv=1;
		 else
			 $conv=0;
		
		
		
		/*1- definindo a conexao - local, usuario, senha e banco de dados*/
		  include ("conexao.php");
		

		/*2-definindo o comando sql a ser usado */
		 $comandoSql="update tb_paciente set paciente='$p', tipo_sanguineo='$t',
		       fator_rh='$f', convenio='$conv' where id_paciente=$id";
        
		/*3-executando o comando sql */ 
        $resultado= mysqli_query($con, $comandoSql);
		  
		/*4-conferindo se o registro foi inserido*/  
		 if($resultado==true){
					 
		  echo "Dados alterados com sucesso ";
		  
			 
		 }else{
			 echo "Não foi possivel a alteração";
		
			
		 }
			 
		 
    
	 
	 ?>
   
   
   
   </div>
   </body>
 </html>
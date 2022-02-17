<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Cadastro de Paciente</title>
  </head>
  <body>

	
     <?php
	  include "menu.php";
	
	   ?>  
    	
		 
		 <div class="container">
		 
		 <?php
		
		/*pegando os dados vindos do formulario */
		 $p=$_POST["paciente"];
		 $t=$_POST["tipoSanguineo"];
		 $f=$_POST["fatorRh"];
		 if(isset($_POST["convenio"]))
			 $c=1;
			
		 else{
			 $c=0;
		 }
		 
			 
			
		/*1- definindo a conexao - local, usuario, senha e banco de dados*/
		include ("conexao.php");
		

		/*2-definindo o comando sql a ser usado */
		 $comandoSql="insert into tb_paciente(paciente, tipo_sanguineo, fator_rh,convenio)
		 values('$p','$t','$f','$c')";
		
        
		/*3-executando o comando sql */ 
        $resultado= mysqli_query($con, $comandoSql);
		  
		/*4-conferindo se o registro foi inserido*/  
		 if($resultado==true){
					 
		  echo "Dados gravados com sucesso ";
			 
		 }else{
			 echo "Não foi possivel a gravacao";
			
		 }
			 
		 
         
         ?> 
		 </div>
</body>
</html>
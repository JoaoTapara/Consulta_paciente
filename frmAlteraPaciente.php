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
	    //pegando o id do paciente selecionado
	    $id=$_GET["id"];
	 
	 
	 /*1-definindo a conexao -local, usuario, senha e banco de dados*/
         include_once ("conexao.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $comandoSql="select * from tb_paciente where id_paciente=$id";
	   
		/*3-executando o comando sql */ 
		 $result= mysqli_query($con, $comandoSql);
		        
		/*4-pegando os dados armazenados e exibindo*/
		if($dados=mysqli_fetch_assoc($result)){
			
			$p= $dados["paciente"];
			$t= $dados["tipo_sanguineo"];
			$f= $dados["fator_rh"];
			$c= $dados["convenio"];
			
	 	}
	 
	
	?>
	
	<br>
	<h2> Alteração de Paciente </h2>
     <form name="frmPaciente"    action="alteraPaciente.php"  method="POST">
         
		  <label for="id">Id</label><br>
         <input type="text" readonly name="id" value="<?php echo $id  ?>"   required="required">
		 <br> <br>
		 
		 <label for="paciente">Paciente</label><br>
         <input type="text" name="paciente" required="required" value="<?php echo $p ?>">
		 <br> <br>
		 
		 <label for="tipoSanguineo">Tipo sanguineo</label> <br>
         <input type="radio" name="tipoSanguineo" value="A" <?php if ($t=='A') echo 'checked' ?>>A<br>
		 <input type="radio" name="tipoSanguineo" value="B" <?php if ($t=='B') echo 'checked' ?>>B <br>
		 <input type="radio" name="tipoSanguineo" value="AB" <?php if ($t=='AB') echo 'checked' ?>>AB<br>
		 <input type="radio" name="tipoSanguineo" value="O" <?php if ($t=='O') echo 'checked' ?>>O<br>
		 
		 
		  <label for="fatorRh">fatorRh</label> <br>
          <input type="radio" name="fatorRh" value="+" <?php if ($f=='+') echo 'checked' ?> >Positivo<br>
		  <input type="radio" name="fatorRh" value="-"<?php if ($f=='-') echo 'checked' ?>>Negativo <br>
		 <br>
		 
		  <br> 
		  <label for="convenio"> Convênio </label> 
		 <input type="checkbox" name="convenio" <?php if($c==1) echo'checked'?>>
		 
		 <br> <br>
		
         
           <input type="submit" name="alterar" value="Alterar" >
           <input type="reset" name="limpar" value="limpar">
       
	   

	</form>
		 
		 
		
	
	
   
   
   </div>
  </body>
</html>  
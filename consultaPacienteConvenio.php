<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <head>
   <title>Consulta de Paciente Convenio</title>
  </head>
  <body>

	
     <?php 
     include "menu.php";
	 ?>

  <div class="container">  
  
    <h2> Lista de Pacientes </h2>
   		<table class="table">
  		<thead class="thead-dark">
	<?php
       /*1-definindo a conexao -local, usuario, senha e banco de dados*/
          include("conexao.php");
			     
		/*2-definindo o comando sql a ser usado */
		 $comandoSql="select * from tb_paciente where convenio=1";
	   
		/*3-executando o comando sql */ 
		 $resultado= mysqli_query($con, $comandoSql);
		     ?>
			<tr>
      			<th scope="col">ID</th>
      			<th scope="col">Nome do Paciente</th>
      			<th scope="col">Convênio</th>
    		</tr>
			 </thead>
			<?php      
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($resultado)){
			$id=$dados["id_paciente"];
			$p= $dados["paciente"];
			$c= $dados["convenio"];
			if ($c==1)
				$conv="sim";
			else
				$conv="não";
			
			?>
			<tbody>
				<tr>
				  <th scope="row"><?php echo "$id <br>"; ?></th>
				  <td><?php echo "$p <br> "; ?></td>
				  <td><?php echo "$conv <br>"; ?></td>
				  
				</tbody>
			<?php
				
			/*echo "idPaciente: $id <br>";
			echo "Nome do Paciente: $p <br> ";
            echo "Convênio: $conv <br> ";	*/
            
		
		 
		}	
		
	
	   
    ?>
			</thead>
			</table>

	</div> 
	
               
</body>
</html>
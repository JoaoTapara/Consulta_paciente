<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <head>
   <title>Consulta de Paciente</title>
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
		 $comandoSql="select * from tb_paciente";
	   
		/*3-executando o comando sql */ 
		 $resultado= mysqli_query($con, $comandoSql);
		    ?>
			<tr>
      			<th scope="col">ID</th>
      			<th scope="col">Nome do Paciente</th>
      			<th scope="col">Tipo sanguíneo</th>
      			<th scope="col">Fator Rh</th>
				<th scope="col">Convênio</th>
				<th scope="col">Alterar</th>
				<th scope="col">Excluir</th>
    		</tr>
			 </thead>
			<?php
				
			
		/*4-pegando os dados armazenados e exibindo*/
		while($dados=mysqli_fetch_assoc($resultado)){
			$id=$dados["id_paciente"];
			$p= $dados["paciente"];
			$t= $dados["tipo_sanguineo"];
			$f= $dados["fator_rh"];
			$c= $dados["convenio"];
			if ($c==true)
				$conv="sim";
			else
				$conv="não";
			?>
			<tbody>
				<tr>
				  <th scope="row"><?php echo "$id <br>"; ?></th>
				  <td><?php echo "$p <br> "; ?></td>
				  <td><?php echo "$t <br>"; ?></td>
				  <td><?php echo "$f <br>"; ?></td>
				  <td><?php echo "$conv <br> "; ?></td>
				
				
			
			
			<?php
			
			//echo "idPaciente: $id <br>";
			//echo "Nome do Paciente: $p <br> ";
            //echo "Tipo sanguíneo: $t <br>";
            //echo "Fator Rh: $f <br>";
            //echo "Convênio: $conv <br> ";	
            
			
			if($_SESSION["tipo"]=="admin"){
				
			?>
				<td><?php echo "<a href=frmAlteraPaciente.php?id=$id> Alterar	</a>"; ?></td>
				<td><?php echo "<a href=excluiPaciente.php?id=$id> Excluir </a>"; ?></td>
				</tr>
			</tbody>	
			<?php
            //echo "<a href=frmAlteraPaciente.php?id=$id> Alterar	</a>";
            //echo "<a href=excluiPaciente.php?id=$id> Excluir </a>";			
			
			}
		 
			
		}
	
	   
    ?>
			
			
			
	  </tbody>
	 </table>
	
	</div> 
	
	
	
	
               
</body>
</html>
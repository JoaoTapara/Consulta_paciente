<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
    <div class="container">
	
	<div class="alert alert-primary bg-primary" role="alert">
             <?php
			   session_start();
			    echo "Ola, " . $_SESSION["nome"] . " você está logado como " . $_SESSION["tipo"];
			 
			 ?>
    </div>
	
	<?php
        		 if ($_SESSION["tipo"]=="admin"){
	?> 
		
				 <a type="button" class="btn btn-primary" href='frmPaciente.php'>Cadastrar paciente </a>
					 
				 <a type="button" class="btn btn-primary" href='consultaPaciente.php'>Consultar Paciente</a>
					 
				 <a type="button" class="btn btn-primary" href='consultaPacienteConvenio.php'>Pacientes com convênio</a>
				
				 <a type="button" class="btn btn-primary" href='consultaPacienteMais.php'>Pacientes com RH +</a>
					 
				 <a type="button" class="btn btn-primary" href='consultaPacienteMenos.php'>Pacientes com RH -</a>
				 
				 <a type="button" class="btn btn-primary" href='frmLogin.php'>Sair</a>
					 
			
	<?php		
				   }else{
			     	   
				 
				  echo " <a href='consultaPaciente.php'>Consultar Paciente</a>";
				  
				  echo "<a href='frmLogin.php'>Sair</a>";
				 }
			?>
	
	   <hr>
      
	</div>
	

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>





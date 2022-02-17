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
     
   
     <h3> Cadastro Paciente </h3>
     <form name="frmPaciente"    action="cadastraPaciente.php"  method="POST">
         
		 <label for="paciente">Paciente</label><br>
         <input type="text" name="paciente" required="required" class="form-control">
		 
		 <br> 
		 <label for="tipoSanguineo">Tipo sanguineo</label> <br>
         <input type="radio" name="tipoSanguineo" value="A">A<br>
		 <input type="radio" name="tipoSanguineo" value="B">B <br>
		 <input type="radio" name="tipoSanguineo" value="AB">AB<br>
		 <input type="radio" name="tipoSanguineo" value="O">O<br>
		 
		 
		 
		 <label for="fatorRh">fatorRh</label> <br>
         <input type="radio" name="fatorRh" value="+">Positivo<br>
		 <input type="radio" name="fatorRh" value="-">Negativo <br>
		 <br>
		
		 <label for="convenio"> Convênio </label> 
		 <input type="checkbox" name="convenio">
		 
		 <br> <br>
		
         
           <input type="submit" name="cadastrar" value="Cadastrar" >
           <input type="reset" name="limpar" value="limpar">
       
	   

	</form>
			
		
	

  </div>
	

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
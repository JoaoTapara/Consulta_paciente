<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	  
	   da prof 
    <title>Login</title>
  </head>
  <body>
    <div class="container">
     <?php 

    	 /*pegando os dados vindos do formulario */
			  $usuario=$_POST["usuario"];
			  $senha=$_POST["senha"];
			 
            /*1- definindo a conexao - local, usuario, senha e banco de dados*/
			 include "conexao.php";
        
            /*2- verificando se a conexao foi estabelecida */
             if($con==true){
            
			/*3-definindo o comando sql a ser usado */
			$comandoSql="select *from tb_usuario where login='$usuario' 
			and senha='$senha'";
			
			/*4-executando o comando sql */	
           	$resultado=mysqli_query($con,$comandoSql);
			              
            /*5- verificando se encontrou registro */  
            if(mysqli_num_rows($resultado)<=0) {
				//header ("location:frmLogin.php");//nao encontrou o usuario
				?>
				<script>
				
				window.location.href = "frmLogin.php";
				
				</script>
				
				
				<?php
				
						
			}else{
				//achou o usuario
				if ($dados=mysqli_fetch_assoc($resultado)){
					 $n=$dados["nome"];
					 $t=$dados["tipo"];
					 
					session_start();
					
					$_SESSION["nome"]=$n;
					$_SESSION["tipo"]=$t;

					
					//header("location:menu.php");
					?>
					<script>
					 window.location.href = "menu.php";
					</script>
					<?php
					
					
				}
				  
					
				
				 
			}
				
	}  
 
		 	  
  
?>
    

       
	</div>
	

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>





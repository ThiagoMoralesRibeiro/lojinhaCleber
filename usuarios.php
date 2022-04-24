<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Form PHP</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	
	<!-- Lastest compiled AJAX-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
</head>
<body>


	<table border="2px" cellpadding="7px" cellspacing="2">
					<tr>
						<td>Nome</td>
						<td>Email</td>
						<td>CPF</td>
						<td>Endereço</td>
						<td>Bairro</td>
						<td>Cidade</td>
						<td>UF</td>
						<td>Telefone</td>
					</tr>
	<?php    
			include_once './classes/dataBaseConnection.class.php';
	
			$consultaUsuarios = new DataBaseConnection();
			$resultSelect = $consultaUsuarios->getConn()->query("SELECT * FROM usuarios");

			while($line = mysqli_fetch_assoc($resultSelect)){
				$nameUser =  $line['nome'] ;
				$emailUser =   $line['email'] ;
				$cpfUser = $line['cpf'] ;
				$adressUser =$line['endereco'] ;
				$bairroUser= $line['bairro'] ;
				$cityUser= $line['cidade'] ;
				$ufUser= $line['uf'] ;
				$telUser= $line['telefone'] ;
			}
			echo
				"<tr>
					<td>$nameUser</td>
					<td>$emailUser</td>
					<td>$cpfUser</td>
					<td>$adressUser</td>
					<td>$bairroUser</td>
					<td>$cityUser</td>
					<td>$ufUser</td>
					<td>$telUser</td>
				</tr>";


	?>

	</table>

	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form id="userCad" action="" method="post">
  			<div class="form-group">
      			<label for="name">Name:</label>
      			<input type="text" class="form-control" id="name" placeholder="Enter your name" name="namePerson">
    		</div>
  			
    		<div class="form-group">
      			<label for="email">Email:</label>
      			<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    		</div>
    		
    		<div class="form-group">
    			<label for="pwd">Password:</label>
    			<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
  			</div>
    		
    		<div class="form-group">
      			<label for="cpf">CPF:</label>
      			<input type="text" class="form-control" id="cpf" placeholder="Enter your CPF" name="cpf">
    		</div>
    		
    		<div class="form-group">
      			<label for="adress">Endereço:</label>
      			<input type="text" class="form-control" id="address" placeholder="Enter your adress" name="adress">
    		</div>
    		
    		<div class="form-group">
      			<label for="bairro">Bairro:</label>
      			<input type="text" class="form-control" id="bairro" placeholder="Enter your bairro" name="bairro">
    		</div>
    		
    		<div class="form-group">
      			<label for="cidade">Cidade:</label>
      			<input type="text" class="form-control" id="cidade" placeholder="Enter your cidade" name="cidade">
    		</div>
    		
    		<div class="form-group">
      			<label for="uf">UF:</label>
      			<input type="text" class="form-control" id="uf" placeholder="Enter your UF" name="uf">
    		</div>
    		
    		<div class="form-group">
      			<label for="cep">CEP:</label>
      			<input type="text" class="form-control" id="cep" placeholder="Enter your cep" name="cep">
    		</div>
    		
    		<div class="form-group">
      			<label for="telefone">Telefone:</label>
      			<input type="text" class="form-control" id="tel" placeholder="Enter your Telephone" name="telefone">
    		</div>	
    		
    		<div class="form-group">
      			<label for="foto">Foto:</label>
      			<input type="text" class="form-control" id="foto" placeholder="Enter your link photo" name="foto">
    		</div>	
    		
    		<div class="form-group form-check">
      			<label class="form-check-label">
        			<input class="form-check-input" type="checkbox" name="remember"> Remember me
        		</label>
     	 	
    		</div>
    		<button type="submit" class="btn btn-dark" id="btn-confirma">Submit</button>
  		</form>
	</div>

	
	
	<script type="text/javascript">
		$(document).ready(function() {
    
			$('#btn-confirma').click(function() {
        		info = $('#userCad').serialize();
        		console.log(info);

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'saveUser.php',
					async: true,
					data: info,
					success: function(response) {
						location.reload();
					}
				});

				return false;
			});

		});

	</script>

</body>
</html>
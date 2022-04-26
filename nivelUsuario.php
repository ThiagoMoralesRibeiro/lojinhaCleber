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
							<td>Nível do Usuário</td>
							
						</tr>
		<?php    
				include_once './classes/dataBaseConnection.class.php';
		
				$consultaUsuarios = new DataBaseConnection();
				$resultSelect = $consultaUsuarios->getConn()->query("SELECT * FROM nivelusuarios");

				while($line = mysqli_fetch_assoc($resultSelect)){
					$nivelUser =  $line['nivel'] ;
					
				}
				echo
					"<tr>
						<td>$nivelUser</td>
						
					</tr>";


		?>

	</table>

	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form action="" method="post" id="nivelUserCad">
  			<div class="form-group">
      			<label for="userLevel">Nível do Usuário:</label>
      			<input type="number" class="form-control" id="userLevel" placeholder="Enter nivel usuario" name="userLevel">
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
        		info = $('#nivelUserCad').serialize();
        		console.log(info);

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'saveNivelUser.php',
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
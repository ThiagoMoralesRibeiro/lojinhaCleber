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
							<td>Ordem</td>
							<td>Quantidade do Item</td>
							<td>Data da devolução</td>
							<td>Motivo da devolução</td>
						</tr>
		<?php    
				include_once './classes/dataBaseConnection.class.php';
		
				$consultaUsuarios = new DataBaseConnection();
				$resultSelect = $consultaUsuarios->getConn()->query("SELECT * FROM itemspedido");

				while($line = mysqli_fetch_assoc($resultSelect)){
					$order =  $line['ordem'] ;
					$qtdItem =   $line['qtdItem'] ;
					$dataDev= $line['dtDevolucao'] ;
					$motivoDev =$line['motivoDevolucao'] ;
				}
				echo
					"<tr>
						<td>$order</td>
						<td>$qtdItem</td>
						<td>$dataDev</td>
						<td>$motivoDev</td>
					</tr>";


		?>

	</table>

	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form action="" method="post" id="itemPedidoCad">
  			<div class="form-group">
      			<label for="ordem">Ordem:</label>
      			<input type="number" class="form-control" id="ordem" placeholder="Enter your dtpedido" name="ordem">
    		</div>
  			
    		<div class="form-group">
      			<label for="dtpedido">Quantidade do Item:</label>
      			<input type="number" class="form-control" id="qtitem" name="qtitem">
    		</div>
    		
    		
    		<div class="form-group">
      			<label for="dtnota">Data da Devolução:</label>
      			<input type="date" class="form-control" id="dtDev"  name="dtDev">
    		</div>
    		
    		<div class="form-group">
      			<label for="nota">Motivo da Devolução:</label>
      			<input type="text" class="form-control" id="motivDev"  name="motivDev">
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
        		info = $('#itemPedidoCad').serialize();
        		console.log(info);

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'saveItemsPedido.php',
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
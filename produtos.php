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
        
</head>
<body>

	<table border="2px" cellpadding="7px" cellspacing="2">
					<tr>
						<td>Fabricante</td>
						<td>Nome</td>
						<td>Marca</td>
						<td>Descrição</td>
						<td>Modelo</td>
						<td>Unidade de Medida</td>
						<td>Largura</td>
						<td>Altura</td>
						<td>Profundidade</td>
						<td>Peso</td>
						<td>Cor</td>
					</tr>
	<?php    
			include_once './classes/dataBaseConnection.class.php';
	
			$consultaProdutos = new DataBaseConnection();
			$resultSelect = $consultaProdutos->getConn()->query("SELECT * FROM produtos");

			while($line = mysqli_fetch_assoc($resultSelect)){
				$fabrProd = $line['fabricante'];
				$nameProd =  $line['nome'] ;
				$brandProd =   $line['marca'] ;
				$modeloProd = $line['modelo'] ;
				$descr =$line['descricao'] ;
				$large= $line['largura'] ;
				$height= $line['altura'] ;
				$prof= $line['profundidade'] ;
				$weight= $line['peso'] ;
				$color = $line['cor'];
			}
			echo
				"<tr>
					<td>$fabrProd </td>
					<td>$nameProd </td>
					<td>$brandProd </td>
					<td>$modeloProd </td>
					<td>$descr </td>
					<td>$large </td>
					<td>$height </td>
					<td>$prof </td>
					<td>$weight</td>
					<td>$color  </td>
				</tr>";

				

	?>

	</table>

	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form action="" method="post" id="prodCad">
  		
  			<div class="form-group">
      			<label for="fabr">Fabricante:</label>
      			<input type="text" class="form-control" id="fabr" placeholder="Enter the fabricante" name="fabr">
    		</div>
    		
  			<div class="form-group">
      			<label for="name">Nome:</label>
      			<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    		</div>
  			
    		<div class="form-group">
      			<label for="marca">Marca:</label>
      			<input type="text" class="form-control" id="marca" placeholder="Enter brand" name="marca">
    		</div>
    		
    		<div class="form-group">
    			<label for="pwd">Descrição:</label>
    			<textarea rows="5" cols="5" class="form-control" id="descricao" name="descricao" class="form-control" placeholder="Enter descricao"></textarea>
  			</div>

			<div class="form-group">
				<label for="marca">Modelo:</label>
				<input type="text" class="form-control" id="modelo" placeholder="Enter model" name="modelo">
		  </div>
    		
    		<div class="form-group">
      			<label for="uni">Unidade de Medida:</label>
      			<input type="text" class="form-control" id="uni" placeholder="Enter your Unidade de Medida" name="uni">
    		</div>
    		
    		<div class="form-group">
      			<label for="large">Largura:</label>
      			<input type="number" class="form-control" id="largura" name="largura">
    		</div>
    		
    		<div class="form-group">
      			<label for="altura">Altura:</label>
      			<input type="number" class="form-control" id="altura" name="altura">
    		</div>
    		
    		<div class="form-group">
      			<label for="prof">Profundidade:</label>
      			<input type="number" class="form-control" id="profundidade" name="prof">
    		</div>
    		
    		<div class="form-group">
      			<label for="peso">Peso:</label>
      			<input type="number" class="form-control" id="peso" name="peso">
    		</div>
    		
    		<div class="form-group">
      			<label for="color">Cor:</label>
      			<input type="text" class="form-control" id="color" name="color">
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
        		info = $('#prodCad').serialize();
        		console.log(info);

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'saveProducts.php',
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
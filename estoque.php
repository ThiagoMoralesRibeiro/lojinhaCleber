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
			<td>Data de Entrada</td>
			<td>Quantidade</td>
			<td>Data de Fabricação</td>
			<td>Data de vencimento</td>
			<td>NF-Compra</td>
			<td>Preço da Compra</td>
			<td>ICMS</td>
			<td>Preço de Venda</td>
			<td>Quantidade Vendida</td>
			<td>Quantidade de Ocorrência</td>
			<td>Ocorrência</td>
			
			
		</tr>
		<?php    
		include_once './classes/dataBaseConnection.class.php';

		$consultaProdutos = new DataBaseConnection();
		$resultSelect = $consultaProdutos->getConn()->query("SELECT * FROM estoque");

		while($line = mysqli_fetch_assoc($resultSelect)){
					$dtEntrada= $line['dtEntrada'];
					$quantidade = $line['quantidade'];
					$dtFabricacao = $line['dtFabricacao'];
					$dtVencimento = $line['dtVencimento'];
					$nfCompra= $line['nfCompra'];
					$precoCompra= $line['precoCompra'];
					$icms= $line['icmsCompra'];
					$precoVenda= $line['precoVenda'];
					$qtdVendida= $line['qtdVendida'];
					$qtdOcorrencia= $line['qtdOcorrencia'];
					$ocorrencia= $line['ocorrencia'];

		}
		echo
			"<tr>
				<td>$dtEntrada</td>
				<td>$quantidade </td>
				<td>$dtFabricacao </td>
				<td>$dtVencimento </td>
				<td>$nfCompra</td>
				<td>$precoCompra</td>
				<td>$icms</td>
				<td>$precoVenda</td>
				<td>$qtdVendida</td>
				<td>$qtdOcorrencia</td>
				<td>$ocorrencia</td>

			</tr>";

			

		?>
	</table>




	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form action="" id="cadEstoque" method="post">
  			<div class="form-group">
      			<label for="dataEntrada">Data de Entrada</label>
      			<input type="date" class="form-control" id="dtEntrada"  name="dtEntrada">
    		</div>
  			
    		<div class="form-group">
      			<label for="qtd">Quantidade:</label>
      			<input type="number" class="form-control" id="qtd"name="qtd">
    		</div>
    		
    		<div class="form-group">
      			<label for="dataFabricacao">Data de Fabricação</label>
      			<input type="date" class="form-control" id="dtFabr"  name="dtFabr">
    		</div>
    		
    		<div class="form-group">
      			<label for="dataVenc">Data de Vencimento</label>
      			<input type="date" class="form-control" id="dtVenc"  name="dtVenc">
    		</div>
    		
    		<div class="form-group">
      			<label for="nf">Nf-Compra:</label>
      			<input type="text" class="form-control" id="nf"  name="nf">
    		</div>
    		
    		<div class="form-group">
      			<label for="buyPrice">Preço da Compra:</label>
      			<input type="text" class="form-control" id="buyPrice"  name="buyPrice">
    		</div>
    		
    		<div class="form-group">
      			<label for="icms">ICMS:</label>
      			<input type="text" class="form-control" id="icms" name="icms">
    		</div>
    		
    		<div class="form-group">
      			<label for="sellPrice">Preço de Venda:</label>
      			<input type="text" class="form-control" id="sellPrice" name="sellPrice">
    		</div>
    		
    		<div class="form-group">
      			<label for="qtdVendida">Quantidade Vendida:</label>
      			<input type="text" class="form-control" id="qtdVendida"  name="qtdVendida">
    		</div>
    		
    		<div class="form-group">
      			<label for="qtdOcorrencia">Quantidade de Ocorrências:</label>
      			<input type="text" class="form-control" id="qtdOcorrencia"  name="qtdOcorrencia">
    		</div>	

            <div class="form-group">
      			<label for="telefone">Ocorrencia:</label>
      			<input type="text" class="form-control" id="Ocorrencia" name="Ocor">
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
        		info = $('#cadEstoque').serialize();
        		

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'saveEstoque.php',
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

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
							<td>Data do pedido</td>
							<td>Data do pagamento</td>
							<td>Data da Nota fiscal</td>
							<td>Nota fiscal</td>
							<td>Data do recebimento</td>
							<td>Tipo de frete</td>
							<td>Rastreio</td>
							<td>Endereço de entrega</td>
							<td>Número do Endereço</td>
							<td>Complemento do Endereço</td>
							<td>Bairro do Endereço</td>
							<td>Cidade</td>
							<td>UF</td>
							<td>CEP</td>
							<td>Telefone</td>
							<td>Referência</td>
							<td>Valor total</td>
							<td>Quantidade de itens</td>
							<td>Data da devolução</td>
							<td>Motivo da devolução</td>
						</tr>
		<?php    
				include_once './classes/dataBaseConnection.class.php';
		
				$consultaProdutos = new DataBaseConnection();
				$resultSelect = $consultaProdutos->getConn()->query("SELECT * FROM pedidos");

				while($line = mysqli_fetch_assoc($resultSelect)){
					$dataPedido= $line['dtPedido'];
					$dataPagamento= $line['dtPagamento'];
					$dataNota= $line['dtNotaFiscal'];
					$notaFiscal= $line['notaFiscal'];
					$dataRecebimento= $line['dtRecebimento'];
					$tipoFrete= $line['tipoFrete'];
					$rastreio= $line['rastreioFrete'];
					$endereçoEntrega= $line['entregaendereco'];
					$númeroEndereço= $line['entregaNumero'];
					$complementoEndereço= $line['entregaCompl'];
					$bairroEndereço= $line['entregaBairro'];
					$cidade= $line['entregaCidade'];
					$uf= $line['entregaUF'];
					$cep= $line['entregaCEP'];
					$tel= $line['entregaTelefone'];
					$ref= $line['entregaRefer'];
					$valorTotal= $line['valorTotal'];
					$quantItens= $line['qtdItems'];
					$dataDevolução= $line['dtDevolucao'];
					$motivoDevolução= $line['motivoDevolucao'];
				
				}
				echo
					"<tr>
					<td>$dataPedido</td>
					<td>$dataPagamento</td>
					<td>$dataNota</td>
					<td>$notaFiscal</td>
					<td>$dataRecebimento</td>
					<td>$tipoFrete</td>
					<td>$rastreio</td>
					<td>$endereçoEntrega</td>
					<td>$númeroEndereço</td>
					<td>$complementoEndereço</td>
					<td>$bairroEndereço</td>
					<td>$cidade</td>
					<td>$uf</td>
					<td>$cep</td>
					<td>$tel</td>
					<td>$ref</td>
					<td>$valorTotal</td>
					<td>$quantItens</td>
					<td>$dataDevolução</td>
					<td>$motivoDevolução</td>
				
					</tr>";

					

		?>

	</table>
		

	<div class="container m-5 p-5">
  		<h2>Insert form</h2>
  		<form action="" method="post" id="cadPedido">
  			<div class="form-group">
      			<label for="dtpedido">Data do Pedido:</label>
      			<input type="date" class="form-control" id="dtpedido" placeholder="Enter your dtpedido" name="dtpedido">
    		</div>
  			
    		<div class="form-group">
      			<label for="dtpedido">Data do Pagamento:</label>
      			<input type="date" class="form-control" id="dtpag" name="dtpagl">
    		</div>
    		
    		
    		<div class="form-group">
      			<label for="dtnota">Data Nota Fiscal:</label>
      			<input type="date" class="form-control" id="dtnota"  name="dtnota">
    		</div>
    		
    		<div class="form-group">
      			<label for="nota">Nota Fiscal:</label>
      			<input type="number" class="form-control" id="nota"  name="nota">
    		</div>
    		
    		<div class="form-group">
      			<label for="dtRecebimento">Data de recebimento:</label>
      			<input type="date" class="form-control" id="datereceive"  name="daterec">
    		</div>
    		
    		
    		
    		<div class="form-group">
      			<label for="tipoFrete">Tipo de Frete:</label>
      			<input type="text" class="form-control" id="frete"  name="frete">
    		</div>
    		
    		<div class="form-group">
      			<label for="rastr">Rastreio:</label>
      			<input type="text" class="form-control" id="rastr"  name="rastr">
    		</div>
    		
    		<div class="form-group">
      			<label for="entrega">Endereço de Entrega:</label>
      			<input type="text" class="form-control" id="entregaAddress"  name="entregaNumber">
    		</div>
    		
    		<div class="form-group">
      			<label for="entrega">Número do Endereço:</label>
      			<input type="text" class="form-control" id="entregaNumber"  name="entregaAddress">
    		</div>
    		
    		<div class="form-group">
      			<label for="entrega">Complemento do Endereço:</label>
      			<input type="text" class="form-control" id="entregaComp1"  name="entregaComp1">
    		</div>
    		
    		<div class="form-group">
      			<label for="entrega">Bairro do Endereço:</label>
      			<input type="text" class="form-control" id="entregabairro"  name="entregabairro">
    		</div>
    		
    		<div class="form-group">
      			<label for="entrega">Cidade:</label>
      			<input type="text" class="form-control" id="city"  name="city">
    		</div>
    		<div class="form-group">
      			<label for="entregaUF">UF:</label>
      			<input type="text" class="form-control" id="entregaUF"  name="entregaUF">
    		</div>
    		<div class="form-group">
      			<label for="cep">CEP:</label>
      			<input type="text" class="form-control" id="cep"  name="cep">
    		</div>
    		<div class="form-group">
      			<label for="telefone">Telefone:</label>
      			<input type="text" class="form-control" id="telefone"  name="telefone">
    		</div>
    		<div class="form-group">
      			<label for="entrega">Referência:</label>
      			<input type="text" class="form-control" id="ref"  name="ref">
    		</div>
    		<div class="form-group">
      			<label for="total">Valor Total:</label>
      			<input type="text" class="form-control" id="total" name="total">
    		</div>
    		<div class="form-group">
      			<label for="qtdItens">Qtd Itens:</label>
      			<input type="text" class="form-control" id="qtdItens"  name="qtdItens">
    		</div>
    		<div class="form-group">
      			<label for="entrega">Data de Devolução:</label>
      			<input type="text" class="form-control" id="dataDevolucao"  name="dtDev">
    		</div>
    		<div class="form-group">
      			<label for="entrega">Motivo da Devolução:</label>
      			<input type="text" class="form-control" id="motivoDevolucao"  name="motivoDev">
    		</div>
    		
    		
    		<div class="form-group">
      			<label for="telefone">Telefone:</label>
      			<input type="text" class="form-control" id="tel" placeholder="Enter your Telephone" name="telefone">
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
        		info = $('#cadPedido').serialize();
        		console.log(info);

				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: 'savePedidos.php',
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
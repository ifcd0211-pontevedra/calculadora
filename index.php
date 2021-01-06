<?php

$resultado = 0;

if(isset($_POST) && count($_POST)>0){
	
	switch($_POST['operacion']){
		case 0:
			$operacion = "SUMA";
			$resultado = $_POST['num_1']+$_POST['num_2'];
			break;
		case 1:
			$operacion = "RESTA";
			$resultado = $_POST['num_1']-$_POST['num_2'];
			break;
		case 2:
			$operacion = "MULTIPLICACIÓN";
			$resultado = $_POST['num_1']*$_POST['num_2'];
			break;
		case 3:
			$operacion = "DIVISIÓN";
			$resultado = $_POST['num_1']/$_POST['num_2'];
			break;
	}
}

?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Calculadora</title>
		
		<!-- Metadatos para el posicionador -->
		<meta name="author" content="bricoware">
		<meta name="description" content="Calculadora">
		<meta name="keywords" content="Calculadora, ifcd0211">
		
		<!-- Metadatos del comportamiento responsive -->
		<meta name="viewport" content="width:device-width; initial-scale:1.0">
	</head>
	
	<body>
		
		<main>
			<form id="calculadora" action="#" method="POST">
				<div>
					<label for="num_1">Número 1:</label>
					<input type="number" id="num_1" name="num_1" value="<?php echo (isset($_POST['num_1']))? $_POST['num_1']:0; ?>" />
				</div>
				<div>
				<div>
					<label for="num_1">Número 2:</label>
					<input type="number" id="num_2" name="num_2" value="<?php echo (isset($_POST['num_2']))? $_POST['num_2']:0; ?>" />
				</div>
				<div>
					<input type="radio" name="operacion" value="0" />Suma 
					<input type="radio" name="operacion" value="1" />Resta 
					<input type="radio" name="operacion" value="2" />Multiplicación 
					<input type="radio" name="operacion" value="3" />División
				</div>
				<div>
					<input type="submit" value="Calcular" />
				</div>			
				<div>
					El resultado de la operación <?php echo (isset($operacion))? $operacion : "VACÍA"; ?> es igual a <input type="text" value="<?php echo $resultado;?>" />
				</div>			
			</form>
		</main>

	</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Suma Mayor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<form action="index.php" method="POST" >
		<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-info">Suma Mayor</h4>
					</div>
					<div class="panel-body">
						<label class="text-info">Introduzca secuecia de números enteros separados por comas</label>
						<div class="form-group">
							<label for="" class="control-label">Secuencia</label>
							<div class="input-group col-md-12">
								<input id="secuencia" type="text" name="secuencia" class="form-control" placeholder="Introduzca valores enteros" autofocus onChange="validarSecuencia(this.value);">
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary">Calcular</button>
						</div>		
						
						<?php
							if (!empty($_POST['secuencia'])){
								?>
								<pre><?php
									$arrayName = explode(",", $_POST['secuencia']);
									print_r($arrayName);
									echo "<br>"  . "Suma Mayor: " . maxSuma($arrayName);
									?>		
								</pre>
								<?php
							}
						?>


					</div>
				</div>
		</div>
	</form>
</body>
</html>

<script>
    function validarSecuencia(numero){
    	var secuencia = document.getElementById("secuencia");
    	var anArray = secuencia.value.split(',');
    	for(i=0;i<anArray.length;i++){ //valores no permitidos example --5,2,1
    		if (isNaN(anArray[i]) || anArray[i]==""){
    			alert("El valor " + numero + " no es una secuencia permitida");
				secuencia.value="";
				secuencia.focus();
    		}
    	}

	    if (!/^([0-9]|[,]|[-])*$/.test(numero)){ // solo permite enteros negativos y positivos separados con coma
	    	var secuencia = document.getElementById("secuencia");
		    alert("El valor " + numero + " no es una secuencia permitida");
			secuencia.value="";
			secuencia.focus();
	    }
			
	}
</script>

<?php

// Funcion principal

function maxSuma($arrayName){
	$anArray = $arrayName;
	$maxSuma = $anArray[0];
	for($i=0;$i<count($anArray);$i++){
			$suma = $anArray[$i];
		for($j=$i+1;$j<count($anArray);$j++){
				$suma = $suma + $anArray[$j];
			if($suma>$maxSuma)
				$maxSuma = $suma;
		}
	}
	if (count($anArray) == 2 && $anArray[0]<0 )
		if($anArray[0]>$anArray[1])
			$maxSuma = $anArray[0];
		else
			$maxSuma = $anArray[1];
	return $maxSuma;
}

?>
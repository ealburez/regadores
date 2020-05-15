<html>
<head>
  <title>Control de regadores</title>
</head>
<body>
	<p id="text1">Regadores Alburez</p>

	<?php  
  	$numRega=-1;
	$confDir="regadores.conf";
	$confFile = fopen($confDir, "r") or die("Unable to open file!");
	$input=array();
	
	//load data from file
	while(!feof($confFile)) {
  		$input[]=explode(",",fgets($confFile));
		$numRega+=1;
	}
    
	fclose($confFile);
    
	print_r($input);
	
    
    
    echo "<br><label>Total regadores:</label><label id='numRega'> $numRega</label><br><br>";	
	for ($i = 0; $i < $numRega; $i++) {
			
        $checa="";
        if ($input[$i][1] == 1){
				$checa="checked";
        }
  		/*Creación de los controles de los regadores*/
		
        echo "<label for='estado_$i'>Regador $i </label><input type='checkbox' id='estado_$i' name='estado_$i'$checa>";
        
        echo "<button onclick='changeColor('yellow');' id='button_$i'>'Encender 5 minutos'</button><br>";
		
        echo "<label for='hora_$i'>Hora de inicio</label><input type='time' id='hora_$i' value=".$input[$i][2]." name='hora_$i'> <br>";
			
        echo "<label for='tiempo_$i'>Tiempo (en minutos):</label><input type='number' id='tiempo_$i' name='tiempo_$i' value=".$input[$i][4]." min='1' max='100'><br><br>";
	}
	?>
	
	<button onclick="updateDate();" id="prog1">Programar</button> <br>
	<p id="confirm1">No guardado</p><br>
  	<p id="fecha0">Date/Time:</p>
  	<button onclick="changeColor('yellow');">azul</button>
  	<button onclick="changeColor('red');">red</button> <br> <br>
  	<button onclick="testP('desdeAquí');">Fecha</button> <br> <br>
	
<script src="script.js"></script>
</body>
</html>
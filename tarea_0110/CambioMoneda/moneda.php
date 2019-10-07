<?php
	
	$pesos=$_POST['pesos'];
	$opcion=$_POST['lista'];


	switch ($opcion) {
		case 'dolar':
			$usd=$pesos*0.0014;
			echo $usd.' Dolares Norteamericanos';
			break;
		case 'euro':	
			$euro=$pesos*0.0013;
			echo $euro.' Euros';
			break;
		case 'yen':
			$yen=$pesos*0.15;
			echo $yen.' Yenes Japoneses';
			break;	
		case 'real':
			$real=$pesos*0.0057;
			echo $real.' Reales Brasileños';
			break;
		case 'corona':
			$corona=$pesos*0.012;
			echo $corona.' Coronas Noruegas';
			break;
	}



?>
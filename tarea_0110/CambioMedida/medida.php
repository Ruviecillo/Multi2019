<?php
	
	$metros=$_POST['metros'];
	$opcion1=$_POST['lista1'];


	switch ($opcion1) {
		case 'milla':
			$milla=$metros*0.000621371;
			echo $milla.' Millas';
			break;
		case 'yarda':	
			$yarda=$metros*1.09361;
			echo $yarda.' Yardas';
			break;
		case 'feet':
			$feet=$metros*3.28084;
			echo $feet.' Pies';
			break;	
		case 'pulgada':
			$pulg=$metros*39.3701;
			echo $pulg.' Pulgadas';
			break;
		case 'legua':
			$legua=$metros*0.000207124;
			echo $legua.' Leguas';
			break;
		case 'km':
			$km=$metros/1000;
			echo $km.' Kilometros';
			break;
		case 'cm':	
			$cm=$metros*100;
			echo $cm.' Centimetros';
			break;
		case 'dm':
			$dm=$metros*10;
			echo $dm.' Decimetros';
			break;	
		case 'mm':
			$mm=$metros*1000;
			echo $mm.' Milimetros';
			break;
		case 'nm':
			$nm=$metros/1000000000;
			echo $nm.' Nanometros';
			break;
	}
	




?>
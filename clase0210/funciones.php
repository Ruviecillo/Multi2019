<?php 
//funciones
function funcion(){
	echo "bienvenidos a ayudantia";
}
echo "buena cabros";
funcion();
echo "<br>";
//funcion con entrada de un parametro

function funcion2($alumnos){
	if($alumnos==20){
		echo"han venido todos los alumnos";
	}elseif($alumnos < 20 && $alumnos>=10){
		echo "casi";
	}else{
		echo "no paso nah";
	}
}

// funcion con entrada de multiples parametros
function funcion3($a,$b,$c){//notar que los parametros de entrada van separados por ,
	$discriminante=pow($b,2)-4*$a*$c;
	$semiresultado=sqrt($discriminante);
	$resultado1=(-$b+$semiresultado)/2*$a;
	$resultado2=(-$b-$semiresultado)/2*$a;
	if($discriminante >=0){
		echo "la raiz 1 de la ecuacion es $resultado1<br>";
		echo "la raiz 1 de la ecuacion es $resultado2<br>";
			
	}else{
		echo "la ecuacion no tiene solucion en los reales<br>";
	}
}
funcion3(2,3,4);
echo "<br>";

function funcion4($num1,$num2=1){
	$division=$num1/$num2;
	echo "el resultado es: $division";
}
funcion4(15);
//funcion5

//por lo general las funciones no alteran su exterior dado por el traspaso por valor pero al hacer un traspaso por referencia hago que la funcion afecte su exterior

echo "<br>";

//funcion recursiva
function funcion6($valor){
	if($valor<=10){
		echo"$valor <br>";
		funcion6(++$valor);

	}
}
funcion6(0);
echo"<br>";

//funcion return
function funcion7($num1,$num2){
	$operacion=$num1+$num2;
	return $operacion; //devuelve abruptamente la variable de salida y detiene la ejecucion de la funcion volviendo a la linea en que fue llamada la funcion, no se pueden llamar mas de una ver el return
}
echo funcion7(15,5);

echo "<br>";

//ejercicio
function funcion_ej($num1,$num2){
	$resultado=$num1+$num2;
	$resultado=$resultado*$num2;
	$resultado=$resultado*$num1;
	$resultado=sqrt($resultado);
	$resultado=pow($resultado, pow($num1,$num2));
	return $resultado;
}
echo "el resultado de calculos sucesivos es = ".funcion_ej(2,3);



//
//$var="texto.txt";
$nombre="ejemplo";
$nombrearch=$nombre.".html";
$var1="jasasj asjjsajaskdj dsaj";
$var2=fopen($nombrearch,'w');
fputs($var2,$var1);

$var2=fopen($nombrearch, 'r');
echo fread($var2, 200);
fclose($var2);


//tarea ayudanti
//hacer una pagina web que tenga un formulario(nombre del archivo, titulo de la pagina, contenido en txt, color de fondo, color de letras, foto, tamaño de la foto)



 ?>



























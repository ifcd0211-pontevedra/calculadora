<?php

function areaTriangulo($base, $altura){
	echo ($base*$altura/2)."<br />";
}

function areaCuadrado(){
	$lado  = 7;
	echo $lado * $lado."<br />";
}

function areaEsfera($radio){
	echo 4*pi()*$radio*$radio."<br />";
}
areaEsfera(5);
areaEsfera(8);
areaEsfera(18);
areaEsfera(26);
areaEsfera(33);

areaTriangulo(4, 15456 );
areaTriangulo(14, 215);
areaTriangulo(15, 23);
areaTriangulo(648, 68);



?>
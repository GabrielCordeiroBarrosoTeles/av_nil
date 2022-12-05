<?php
	$host  ="localhost";
	$user ="root";
	$senha ="";
	$bancodedados="oficina_a";
                
	$mysqli = new mysqli($host,$user,$senha,$bancodedados);
	if (empty($mysqli)) {
	    echo "erro";
	}
?>


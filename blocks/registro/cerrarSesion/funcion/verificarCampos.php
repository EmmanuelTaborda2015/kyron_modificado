<?php

if(!isset($GLOBALS["autorizado"]))
{
	include("index.php");
	exit;
}else{

/**
 * Realizar una comprobación de la validez de los datos al lado del servidor.
 */	
	
	

	if(!isset($_REQUEST['usuario'])&&!isset($_REQUEST['clave'])){
		$resultado=false;
	}elseif((strlen($_REQUEST['usuario'])>255 || strlen($_REQUEST['usuario'])<3) 
	|| (strlen($_REQUEST['clave'])>255 || strlen($_REQUEST['clave'])<3)){
		$resultado=false;
	}else{
		$resultado=true;
	}
}
?>
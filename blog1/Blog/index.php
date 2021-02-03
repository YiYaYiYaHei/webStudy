<?php
	require("./Config/config.php");
	session_start();

	$c = isset($_GET['c'])?$_GET['c']:'home';
	$c = ucfirst($c)."Controller";

	$a = isset($_GET['a'])?$_GET['a']:'index';

	function __autoload($classname){
		if(substr($classname,-10)=="Controller"){
			include("./Controller/{$classname}.class.php");
		}else if($classname=="Model"){
			include("./Model/{$classname}.class.php");
		}else{
			include("./Org/{$classname}.class.php");
		}
	}

	$obj = new $c;
	$obj->$a();





?>
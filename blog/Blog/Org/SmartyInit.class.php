<?php
	include("Org/Smarty.class.php");

	$smarty = new Smarty();

	$smarty->template_dir="./View";//指定文件查询位置
	$smarty->compile_dir = "./templates_c";//指定文件编译目录(不设会自己生成)
	$smarty->cache_dir = "./cache";//指定缓存位置
	$smarty->caching =  false;false//不允许缓存变量,此时上句可以不写
	



?>
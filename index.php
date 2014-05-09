<?php

function loadPage($pg){
	include_once "pages/".$pg.".php";
}

require_once 'includes/top.php';
$pages = array("home", "agenda", "formacao", "videos", "imprensa", "contato", "admin");

if(isset($_REQUEST["pg"])){
	$parts = explode("/", $_REQUEST["pg"]);
	if(count($parts)>1){
		if(count($parts)==2 && $parts[1]==""){
			loadPage($parts[0]);
		}else{
			loadPage("erro");			
		}
	}else if( in_array($parts[0], $pages) && file_exists("pages/".$parts[0].".php")){ 
		loadPage($parts[0]);
	}else{
		loadPage("erro");
	}
}else{
	loadPage("home");
}

require_once 'includes/bottom.php';
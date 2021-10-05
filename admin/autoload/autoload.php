<?php 
	session_start();
	require_once __DIR__.DIRECTORY_SEPARATOR."../library/function.php";
	require_once __DIR__.DIRECTORY_SEPARATOR."../library/database.php";
	define("IMAGE",$_SERVER['DOCUMENT_ROOT']."/nshopvn.com/admin/public/uploads/");

	$db = new database();
?>
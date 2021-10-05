<?php 
	
	function base_url(){
		return $url = 'http://localhost/nshopvn.com/';
	}

	//get Input
	function getInput($string)
	{
		return isset($_GET[$string])?$_GET[$string]:'';
	}
	// post input 
	function postInput($string)
	{
		return isset($_POST[$string])?$_POST[$string]:'';
	}
	
	function redirectStyle($url = '')
	{
		header("location: ".base_url()."admin/{$url}");
		exit();
	}
	function modules($url)
	{
		return base_url()."admin/".$url;
	}

	function add3dots($string,$sign,$limit){
		if(strlen($string)>$limit){
			return substr($string, 0,$limit).$sign;
		}else
			return $string;
	}

?>
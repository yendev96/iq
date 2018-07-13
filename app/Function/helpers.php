<?php 
	function url(){
		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		return $url;
	}
 ?>
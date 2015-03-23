<?php 
	function increase(){

	}
	function checkAndMove(){

	}
	function checkAndAdd(){
		
	}
	function render($template,$data = array()){
		$path="../views/".$template.".php";
		extract($data);
		require($path);
	}
 ?>
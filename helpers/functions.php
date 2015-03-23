<?php
	function checkAnswer(){
		# checks answer
	}
	function pull(){
		# gets an element out of the current directory and puts it as an argument to render(footer)
	}
	function increase(){
		# if the answer was right then 
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
<?php

	function checkAnswer(){
		# checks answer
	}
	function increase(){
		# if the answer was right then
	}
	function pull($lang){
		# gets an element out of the current directory and puts it as an argument to render(footer)
		$current =simplexml_load_file('../models/current.xml');
		$lang=$current->xpath("/words/word/{$lang}");
		return $lang['0'];
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
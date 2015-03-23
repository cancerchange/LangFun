<?php
	function checkAnswer(){
		# checks answer
	}
	function increase(){
		# if the answer was right then
	}
	function pull(){
		# gets an element out of the current directory and puts it as an argument to render(footer)
		$current =simplexml_load_file('../models/current.xml');
		$french=$current->xpath("/words/word/french");
		$arabic=$current->xpath("/words/word/arabic");
		$pull=array('french'=>$french['0'],'arabic'=>$arabic['0']);
		return $pull;
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
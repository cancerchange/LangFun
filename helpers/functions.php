<?php
	function checkAnswer(){
		# checks answer
	}
	function increase(){
		# if the answer was right then
	}
	function pull(){
		# gets an element out of the current directory and puts it as an argument to render(footer)
		$current = simplexml_load_file('../models/current.xml');
		$get_random_word= new SimpleXMLIterator($current->asXML());
		
		$count=$current->count();
		$rand=rand(0,$count-1);
		
		$get = $get_random_word->xpath("/words/word");
		$choose=$get[$rand]->attributes();
		
		$french=$current->xpath("/words/word[@id={$choose}]/french");
		$arabic=$current->xpath("/words/word[@id={$choose}]/arabic");
		
		$pull=array('french'=>$french['0'],'arabic'=>$arabic['0']);
		
		return $pull;
	}
	function checkAndMove(){
		$current = simplexml_load_file('../models/current.xml');
		$expertise=$current->xpath("/words/word/expertise");
		foreach ($expertise as $exprt) {
			if ($exprt==4) {
				
			}
		}
	}
	function addFromPool(){

	}
	function render($template,$data = array()){
		$path="../views/".$template.".php";
		extract($data);
		require($path);
	}
 ?>
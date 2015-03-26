<?php
	function checkAnswer(){
		# checks answer
	}
	function increase(){
		
	}
	function openPool($pool){
		$json = "";
		
		$json_file = fopen("../models/{$pool}.json",'r');
		
		while ($parse = fgets($json_file)) {
			$json=$json.$parse;
		}
		
		fclose($json_file);

		return $json;
	}
	function pull(){
		$pool = json_decode(openPool('current'),true);
		$choice = rand(0,1);
		return $pool[$choice];
		
	}
	
	function getIds($pool){
		$stream = openPool($pool);
		
		$ids['0']=json_decode($strem,true);
	}
	

	function render($template,$data = array()){
		$path="../views/".$template.".php";
		extract($data);
		require($path);
	}
 ?>
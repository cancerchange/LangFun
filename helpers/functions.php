<?php
	function checkAnswer(){
		# checks answer
	}
	function increase($id){
		
		$json_ori = json_decode(openPool('working'),true);
		foreach ($json_ori as $json) {
			if ($json['id']==$id) {
				$last=$json['expertise'];
				$json['expertise']=$last+1;
			}
		}
		$poor = fopen('../models/working.json','w');
		fwrite($poor, json_encode($json_ori,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
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
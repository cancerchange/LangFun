<?php
	function checkAnswer(){
		# checks answer
	}
	function increase(){
		
			if (isset($_GET['word'])){
				$json_ori = json_decode(openPool('working'),true);
				$json_new = [];
				
				foreach ($json_ori as $key => $value) {
					
					if ($json_ori[$key]['id']==$_GET['word']) {
						
						$json_new[$key]=$json_ori[$key];
						
						$json_new[$key]['expertise']=$json_ori[$key]['expertise']+1;
					
					}

					else { $json_new[$key] = $value; }
				
				}
				
				$poor = fopen('../models/working.json','w');
				fwrite($poor, json_encode($json_new,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
				header('location: index.php');
			}
			
		
		

		
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
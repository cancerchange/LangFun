<?php
	function checkAnswer(){
		# checks answer
	}
	function update(){
			$json_verifie = json_decode(openPool('original_mess'),true);
			$json = [];
			$i=0;
			foreach ($json_verifie as $key => $value) {
				if ($json_verifie[$key]['expertise'] != 5){
					$json[$i]=$json_verifie[$key];
					$i++;
				}	
			}
			$poor = fopen('../models/original_mess.json','w');
			fwrite($poor,json_encode($json,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
			fclose($poor);

			if (isset($_GET['word'])){
				$json_ori = json_decode(openPool('original_mess'),true);
				$json_new = [];
				
				foreach ($json_ori as $key => $value) {
					
					if ($json_ori[$key]['id']==$_GET['word']) {
						
						$json_new[$key]=$json_ori[$key];
						
						$json_new[$key]['expertise']=$json_ori[$key]['expertise']+1;
					
					}

					else { $json_new[$key] = $value; }
				
				}
				
				$poor = fopen('../models/original_mess.json','w');
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
		$pool = json_decode(openPool('original_mess'),true);
		$count = fopen('../models/original_mess.json','r');
		$i=-1;
		while (fgets($count)) {
			$i++;
		}
		fclose($count);
		$choice = rand(0,($i-2)/5-1);
		return $pool[$choice];
		
	}
	
	function getStatus(){
		
	}
	

	function render($template,$data = array()){
		$path="../views/".$template.".php";
		extract($data);
		require($path);
	}
	function initializeDic(){
		$handler = fopen('../models/dictionnary','r');
		$i=0;
		$json= [];
		while ($word = fgets($handler)) {
			$json[$i]['id']=$i;
			$json[$i]['french']=$word;
			$i++;
		}
		fclose($handler);
		$poor=fopen('../models/original.json', 'w');
		fwrite($poor, json_encode($json,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
		fclose($poor);
	}
	function initializeCurrent(){
		
	}

 ?>
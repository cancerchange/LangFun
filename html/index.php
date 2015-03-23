<?php 
	require('../helpers/functions.php');
	
	$pull=pull();
	render("header",$pull);
	checkAndMove();
	render("footer",$pull);
 ?>
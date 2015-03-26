<?php 
	require('../helpers/functions.php');
	update();
	$pull=pull();
	render("header",$pull);
	render("footer",$pull);
?>
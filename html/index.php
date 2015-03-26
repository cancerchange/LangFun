<?php 
	require('../helpers/functions.php');
	increase();
	$pull=pull();
	render("header",$pull);
	render("footer",$pull);
?>
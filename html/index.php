<?php 
	require('../helpers/functions.php');
	update();
	echo '<br>'.getStatus().'/7495';
	$pull=pull();
	render("header",$pull);
	render("footer",$pull);
?>
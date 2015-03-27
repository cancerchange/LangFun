<?php 
	require('../helpers/functions.php');
	update();
	$pull=pull();
	render("header",$pull);
	echo '<br>'.getStatus().'/7495';
	render("footer",$pull);
?>
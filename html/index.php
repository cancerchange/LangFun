<?php 
	require('../helpers/functions.php');
	update();
	render("header",pull());
	render("status",getStatus());
	render("footer");
?>
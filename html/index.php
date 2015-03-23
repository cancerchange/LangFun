<?php 
	require('../helpers/functions.php');
	render("header");
	
	render("footer",array('french'=>pull('french'),'arabic'=>pull('arabic')));
 ?>
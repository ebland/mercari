<?php 
	include('banner.php'); 	
	$mercariImage = Banner::mercariImage();
	header('Content-Type: application/json');
	echo json_encode($mercariImage);
?>
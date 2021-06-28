<?php
	mysqli_connect('localhost','root','');
	if($_SERVER['REQUEST_METHOD']=='post')
	{
		if(!isset($_post['_token'])) || (!isset($_post['_token'] != $_session['token']))
		{
			die('invalid csrf token');
		} 
	}
	$_session['token'] = bin2hex(openssl_random_pseudo_bytes(16));

?>
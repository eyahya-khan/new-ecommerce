<?php
	require('../src/config.php');
	$_SESSION = [];
	session_destroy();
	redirect('../public/login.php?logout');
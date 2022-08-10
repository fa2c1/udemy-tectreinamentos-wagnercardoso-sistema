<?php
	session_start();
		if(!$_SESSION['email']) {
			header('Location: painel.php');
			exit();
	}
?>
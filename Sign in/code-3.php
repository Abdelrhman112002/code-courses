<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: index.html");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: index.html");
	}

?>

<p>Welcome to index</p>


<a href="code-3.php?logout=true">Logout</a>
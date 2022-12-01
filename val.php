<?php
session_start();

if(isset($_SESSION['auth'])){
	if($_SESSION['auth']!=true){
		echo"<script>alert(\"Log in first\");window.location='login.html'</script>";
		exit();
	}
	
}else{
	echo"<script>alert(\"Log in first\");window.location='login.html'</script>";
	exit();
}

?>
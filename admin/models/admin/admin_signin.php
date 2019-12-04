<?php echo 
	session_start();
	include "connection.php";

	if(!isset($_GET['admin_id'])) {
		echo "No admin";
		die();
	}
		
	$adminName = $_GET['admin_id'];
	$adminPass = $_GET['pass'];

	if($adminPass == "" || $adminName == "") {
		// case : when no name or password is supplied
		echo "No name or password supplied for admin";
		die();
	}

	$qry = "select * from administrator where a_name='".$adminName."'";
	
	$res = $con->query($qry);

	if($res->num_rows != 0) {
		$res = $res->fetch_assoc();
		// case : when admin username is found
		if($res['a_password'] == $adminPass) {
			echo "Right pass";
			$_SESSION['admin'] = $adminName;
			//header("location:home.php");
		}
		else {
			echo "Wrong Pass";
		}
	}
?>
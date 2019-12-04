<?php 

	include "connection.php";

	if(!isset($_GET['title'])) {
		echo "No args";
		die();
	}

	if($_GET['title'] == "" || $_GET['author'] == "") {
		echo "Please complete the form !";
		die();
	}

	/* Getting values */
	$t 	 = $_GET['title'];
	$id  = $_GET['id'];
	// $a 	 = $_GET['author'];
	// $p 	 = $_GET['publisher'];
	// $g 	 = $_GET['genre'];
	// $sno = $_GET['sno'];

	/* Forming Query */
	$qry = "delete from books where book_id='".$id."'";
	echo $qry;

	//echo $qry;
	
	
	if($con->query($qry)){
		echo "Book Removed Succesfully!";
	} else {
		echo "Something went wrong removing the book :(";
	}


 ?>
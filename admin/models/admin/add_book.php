<?php 

	include "connection.php";

	if(!isset($_GET['title'])) {
		echo "No args";
		die();
	}

	/* Getting values */
	$t 	 = $_GET['title'];
	$id  = $_GET['id'];
	$a 	 = $_GET['author'];
	$p 	 = $_GET['publisher'];
	$g 	 = $_GET['genre'];
	$sno = $_GET['sno'];

	/* Forming Query */
	$qry = "insert into books(title, book_id, author, publisher, genre, serial_book_id)
	values ('".$t."', '".$id."', '".$a."', '".$p."', '".$g."', '".$sno."')";

	//echo $qry;
	
	
	if($con->query($qry)){
		echo "Book Added Succesfully!";
	} else {
		echo "Something went wrong adding the book :(";
	}


 ?>
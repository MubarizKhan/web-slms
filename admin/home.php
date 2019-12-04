<?php
	session_start();
	if(!isset($_SESSION['admin'])) {
		echo "admin not set";
		header("location:index.html");
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <title> Home | Admin </title>
  

  <link rel="stylesheet" type="text/css" href="./../css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
        <a class="navbar-brand ">
          <img src="./../logo-FAST-NU.png" width="90" height="90" alt=""> 
          <span class="main-heading">Simple Library Management System</span>
        </a>

        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="home.php"> Home</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="add_book.php"> Add Book</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="remove_book.php"> Remove Book</a>
          </li>
        </ul>
      </div>
      </nav>

       <div class="main-wrapper">
        	<div class="heading">
        		<h1>Welcome Admin ! </h1>
        	</div>
            <div class="row pt-5">
             	<div class="col-md-3">
             		<a href="add_book.php"><i class="fa fa-upload" style="font-size: 80px" aria-hidden="true"></i>
             		<h6 style="padding-top: 10px;">Add Book</h6></a>
             	</div>
             	<div class="col-md-3">
             		<a href="remove_book.php" ><i class="fa fa-times" style="font-size: 80px" aria-hidden="true"></i>
             		<h6 style="padding-top: 10px;">Remove Book</h6></a>
             	</div>
             	<div class="col-md-3">
					<a href="user_detail.php"><i class="fa fa-user" style="font-size: 80px" aria-hidden="true"></i>
             		<h6 style="padding-top: 10px;">User Detail</h6>  </a>        		
             	</div>
             	<div class="col-md-3">
             		<i class="fa fa-book" style="font-size: 80px" aria-hidden="true"></i>
             		<h6 style="padding-top: 10px;">Borrowed Books</h6>
             	</div>
             </div> 

             <div class="row pt-5">
             	<div class="col-md-3">
             		
             	</div>
             	<div class="col-md-3">
             		<i class="fa fa-book" style="font-size: 80px" aria-hidden="true"></i>
             		<h6 style="padding-top: 10px;">View All Books</h6>
             	</div>
				<div class="col-md-3">
             		<i class="fa fa-power-off" style="font-size: 80px" aria-hidden="true"></i>
             		<h6 style="padding-top: 10px;">Logout</h6>
             	</div>  
             	<div class="col-md-3">
             		
             	</div>           	
             </div>
       </div>


      <footer class="main-footer">

          &copy Mubeen Ghauri P176107 & Mubariz Khan P180010 | FAST-NU | 2019-2020
        </footer>

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
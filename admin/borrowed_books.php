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
    <title> Borrowed Books | Admin </title>
  

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
          <li class="nav-item">
            <a class="nav-link" href="borrowed_books.php"> Borrowed Book</a>
          </li>
        </ul>
      </div>
      </nav>

        <div class="main-wrapper">
        <div id="container" class="pt-4 mt-4">
        <div class="container-fludi">
            <h1> Borrowed Books </h1>
        </div>



</div>
        </div>
        

        <script>
            
            function setTables() {
                console.log("[verifyLogin] verifying...");
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // document.getElementById("demo").innerHTML = this.responseText;
                    //console.log(this.responseText);
                    //alert(this.responseText);
                    document.getElementById("container").innerHTML += this.responseText;
                }
                };
                
                var url =  "http://localhost/slms/admin/models/admin/borrowed_books.php";
                console.log(url);

                xhttp.open("GET",url, true);
                xhttp.open("GET", url, true);
                xhttp.send();
                console.log("posted request");
            }
            setTables();
        </script>

      <footer class="main-footer">
          &copy Mubeen Ghauri P176107 & Mubariz Khan P180010 | FAST-NU | 2019-2020
        </footer>

         
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
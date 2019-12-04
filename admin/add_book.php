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
    <title> Add Book | Admin </title>
  

  <script type="text/javascript">
    function addBook() {
      console.log("[verifyLogin] verifying...");
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            // document.getElementById("demo").innerHTML = this.responseText;
            console.log(this.responseText);
            alert(this.responseText);
          }
        };
        
        var t   = document.getElementById('title').value;
        var id  = document.getElementById('book_id').value;
        var a   = document.getElementById('author').value;
        var p   = document.getElementById('publisher').value;
        var g   = document.getElementById('genre').value;
        var sno = document.getElementById('serial_no').value;

        var url =  "http://localhost/web-slms/admin/models/admin/add_book.php?title="+t+"&id="+id+"&author="+a+"&publisher="+p+"&genre="+g+"&sno="+sno;
        console.log(url);

        xhttp.open("GET",url, true);
        // xhttp.open("GET", "http://localhost/web-slms/admin/models/admin/add_book.php", true);
        xhttp.send();
        console.log("posted request");
    }
  </script>

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
            <a class="nav-link" href="index.html"> Log-In</a>
          </li>
        </ul>
      </div>
      </nav>

      <div class="main-wrapper">
         <div class="heading">
           <h1>Add Book</h1>
         </div>
      <div class="form">
        <div class="form-group pt-3">
            <label for="title">Title </label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
          </div>

          <div class="form-group">
            <label for="book_id">Book Id</label>
            <input type="text" class="form-control" name="book_id" id="book_id" placeholder="Book ID">
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="author">Author</label>
              <input type="text" class="form-control" name="author" id="author" placeholder="Author Name">
             </div>
             <div class="form-group col-md-6">
              <label for="publisher">Publisher</label>
              <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Publisher">
             </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="genre">Genre</label>
              <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre">
             </div>
             <div class="form-group col-md-6">
              <label for="serial_no">Serial No</label>
              <input type="text" class="form-control" name="serial_no" id="serial_no" placeholder="Serial No">
             </div>
          </div>
          <center><button onclick="addBook()" style="align-self: center;" class="btn btn-secondary mt-5">Add !</button></center>
      </div>
         
      </div>
      <footer class="main-footer">
          &copy Mubeen Ghauri P176107 & Mubariz Khan P180010 | FAST-NU | 2019-2020
        </footer>

         
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
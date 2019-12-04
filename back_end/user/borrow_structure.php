<?php
  session_start();

  if (!isset($_SESSION["roll_no"]))
  {
      header("Location:../../signin.html");
  }

?>



<!DOCTYPE html>
<html>
    <head>
        <title> Borrow a book</title>
    </head>


<link rel="stylesheet" type="text/css" href="../../css/searchbooks.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <body class = "v">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                
                              
            <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                    
                <a class="navbar-brand" href="#"> <img src="logo-FAST-NU.png" width="90" height="90"> <span id = "space"> Simple Library Management System </span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"> </span>
                    </button>
            

              <ul class="nav navbar-nav navbar-right">
                
                    <li class="nav-item dropdown" id = "rb">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Users
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="borrow.html">Borrow</a>
                              <a class="dropdown-item" href="ShowBorrowedBooks.html">Show Borrowed Books</a>
                              <!-- <a class="dropdown-item" href="overduebooks.html">Over-due Books</a> -->
                              <div class="dropdown-divider"></div>
                              <!-- <a class="dropdown-item" href="#"></a> -->
                            </div>
                    </li>
            
              <!-- </ul> -->

              <!-- <ul class="nav navbar-nav navbar-right"> -->

            
                    <li class="nav-item dropdown" id = "lb">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Books
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="Viewall.html">View all Books</a>
                              <!-- <a class="dropdown-item" href="">Show borrowed books</a> -->
                              <a class="dropdown-item" href="removebooks.html">Remove Books</a>
                              <div class="dropdown-divider"></div>
                              <!-- <a class="dropdown-item" href="#"></a> -->
                            </div>
                    </li>
            
                    
              </ul>
            </div>
          </nav>



                  <div class="main-wrapper">

                        <div class="body-heading">
                            Borrowing a new book!
                        </div>

                        <form action = "borrow.php" method="POST">
                                <label for="inputAddress">Book name & Book ID</label>
                                <div class="row">
                                  <div class="col">
                                        
                                    <input type="text" name = "book_title" class="form-control" placeholder="Book name" required>
                                  </div>
                                <!-- </div> -->
                                  <div class="col">
                                    <input type="text" name = "book_id" class="form-control" placeholder="Book ID" required>
                                  </div>
                                </div>
                              <!-- </form> -->
            
                        <!-- <form action = "back_end/user/borrow.php" method="POST"> -->
                                <label for="inputAddress">Borrowed by:</label>
                                <div class="form-group">
                                        <!-- <label for="inputAddress">Book name</label> -->
                                        <input type="text" name = "student_name" class="form-control" id="inputAddress" placeholder="Students Name" required>
                                </div>

                                <div class="form-group">
                                        <!-- <label for="inputAddress">Book name</label> -->
                                        <input type="text" name = "roll_no" class="form-control" id="inputAddress" placeholder="Roll Number" required>
                                </div>

                                <div class="form-group">
                                    <!-- <label for="inputAddress">Book name</label> -->
                                    <input type="text" name = "Serial_BookID" class="form-control" id="inputAddress" placeholder="Serial Book ID" required>
                            </div>

                                <div class="form-group">
                                        <!-- <label for="inputAddress">Book name</label> -->
                                        <input type="text" name = "date" class="form-control" id="inputAddress" placeholder="Date" required>
                                </div>

                                <button type="submit" class="btn btn-dark bxn">Borrow!</button>

                        </form>
                        </div>
                        <footer class="main-footer">

                            &copy Mubeen Ghauri P176107 & Mubariz Khan P180010 | FAST-NU | 2019-2020
                          </footer>   
               

       
                        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
                        </body>

</html>
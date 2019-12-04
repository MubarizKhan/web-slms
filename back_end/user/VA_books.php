<?php
    include "connection.php";
    
  session_start();

  if (!isset($_SESSION["roll_no"]))
  {
      header("Location:../../signin.html");
  }
//   else
//   {
//     echo "<script>alert('Book Borrowed!')</script>";
//   }

    

?>



<!DOCTYPE html>
<html>
    <head>
        <title> View All books</title>
    </head>

 

<link rel="stylesheet" type="text/css" href="../../css/searchbooks.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <body class = "v">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                    
                <a class="navbar-brand" href="#"> <img src="./../../logo-FAST-NU.png" width="90" height="90"> <span id = "space"> Simple Library Management System </span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"> </span>
                    </button>
        
              <ul class="nav navbar-nav navbar-right">        
                    <li class="nav-item dropdown" id = "rb">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Users
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              
                              <a class="dropdown-item" href="user_details.php">My Details</a>
                            <a class="dropdown-item" href="user_cp.php">Change Password</a>
                            <a class="dropdown-item" href="user_cp.php">Log out</a>
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
                              <a class="dropdown-item" href="VA_books.php">View all Books</a>
                              <a class="dropdown-item" href="borrow.html">Borrow</a>
                              <!-- <a class="dropdown-item" href="removebooks.html">Remove Books</a> -->
                              <div class="dropdown-divider"></div>
                              <!-- <a class="dropdown-item" href="#"></a> -->
                            </div>
                    </li>
              </ul>
            </div>
        </nav>


                <centre>
            <div class="main-wrapper">

                        <div class="body-heading">
                            Book Record
                        </div>
    
            
                        
            <?php

                $qry = "SELECT * FROM books ORDER BY book_id DESC";
                $res = $con->query($qry);
                $result = "";

                if($res->num_rows > 0)
                { 

                    $result .= "<div class = 'vv'>";
                    $result .= "<table class='table table-striped'>";
                    $result .= "<thead> <tr>            
                        
                        <th>Book Name</th>
                        <th>Author</th>
                        <th>Book ID</th>
                                    
                        <th>Genre</th>
                        </tr> </thead>" ;
                    
                        $result .= "<tbody> <tr>";
                        
                    while($row = $res->fetch_assoc())
                    {
                        
                        
                      
                      $result .= "  <td>" .$row['title']. "</td>
                                    <td>" .$row['author']. "</td>
                                    <td>" .$row['book_id']. "</td>
                                    <td>" .$row['genre']. "</td>
                                    </tr>";
                                    
                                  
                    }

                    $result .= " </tbody> </table>
                              </table> </div> </div> ";
                    echo $result;
                }

                

            ?>
                    <!-- </div> -->
                </div>
            </centre>

                <footer class="main-footer">

                    &copy Mubeen Ghauri P176107 & Mubariz Khan P180010 | FAST-NU | 2019-2020
                  </footer>         

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                </body>

</html>
<?php
    session_start();
    include "connection.php";
    
  

  if (!isset($_SESSION["roll_no"]))
  {
      header("Location:../../signin.html");
  }
//   else
//   {
//     echo "<script>alert('Book Borrowed!')</script>";
    $roll2 = $_SESSION["roll_no"];
//   }

?>


<!DOCTYPE html>
<html>
    <head>
        <title> User details </title>
    </head>

    <link rel="stylesheet" type="text/css" href="./../../css/ud.css">
    
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">


    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
            <a class="navbar-brand ">
                <img src="./../../logo-FAST-NU.png" width="90" height="90" alt=""> 
                <span class="main-heading">Simple Library Management System</span>
            </a>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown" id = "rb">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="user_details.php">My Details</a>
                      <a class="dropdown-item" href="user_cp.php">Change Password</a>
                      <a class="dropdown-item" href="u_logout.php">Log out</a>
                      <!-- <a class="dropdown-item" href="overduebooks.html">Over-due Books</a> -->
                      <div class="dropdown-divider"></div>
                      <!-- <a class="dropdown-item" href="#"></a> -->
                    </div>
            </li>


            <li class="nav-item dropdown" id = "lb">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Books
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="VA_books.php">View all Books</a>
                  <!-- <a class="dropdown-item" href="">Show borrowed books</a> -->
                  <a class="dropdown-item" href="borrow_structure.php">Borrow a book </a>
                  <div class="dropdown-divider"></div>
                  <!-- <a class="dropdown-item" href="#"></a> -->
                </div>
        </li>



          </ul>
        </div>
          </nav>


          <div class="main-wrapper">

            <div class="body-heading">
                Sign In Users!
            </div>
        
           

            <div class="container bootstrap snippet">
                <div class="panel-body inf-content">
                    <div class="row">
                        <div class="col-md-4">
                            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/user-453533-fdadfd.png" data-original-title="Usuario"> 
                            <ul title="Ratings" class="list-inline ratings text-center">
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <strong>My Profile</strong><br>

                            <?php 
                                $qry = "SELECT * FROM _user_ WHERE roll_no = '".$_SESSION["roll_no"]."'";
                                $res = $con->query($qry);
                                // echo $qry;
                                // echo "hellp";
                                $result = "";

                            if ($res->num_rows > 0)
                            { 
                                $result.= "<div class='table-responsive'>";
                                $result.= "<table class='table table-condensed table-responsive table-user-information'>";
                                $result .= "
                                <tbody>
                                    <tr>        
                                        <td>
                                            <strong>
                                            <span class='glyphicon glyphicon-asterisk text-primary'></span>
                                                ID                                               
                                            </strong>
                                        </td>";

                                    while($row = $res->fetch_assoc())
                                    {
                                        $result .= "<td class='text-primary'>".$row['roll_no']." </td>";
                                        $result .= " </td>
                                    </tr>
                                        <tr>    
                                            <td>
                                                <strong>
                                                <span class='glyphicon glyphicon-user  text-primary'></span>    
                                                Name                                                
                                                </strong>
                                            </td>";
                                    
                                            $result .=  "<td class='text-primary'>".$row['u_name']."</td>";
                                            $result .= "   </tr>
                                            <tr>        
                                                <td>
                                                    <strong>
                                                    <span class='glyphicon glyphicon-cloud text-primary'></span>  
                                                    Blood group                                                
                                                    </strong>
                                                </td>";
                                $result .= " <td class='text-primary'>".$row['blood_group']."</td>";
                                $result .= " </tr>
                                    
                                    <tr>        
                                        <td>
                                            <strong>
                                                <span class='glyphicon glyphicon-bookmark text-primary'></span> 
                                                Address                                                
                                            </strong>
                                        </td>";
                                    
                                    $result .= " <td class='text-primary'> ".$row['u_address']." </td>";
                                    $result .= "   </tr>
                
                                    <span class='glyphicon glyphicon-eye-open text-primary></span>
                                        Role                                                
                                    </strong>
                                </td>
                                <td class='text-primary'>
                                    User email
                                </td>
                            </tr>
                            <tr>        
                                <td>
                                    <strong>
                                        <span class='glyphicon glyphicon-envelope text-primary'></span> 
                                        Email                                                
                                    </strong>
                                </td>";


                                $result.= "<td class='text-primary'> ".$row['u_email']."</td>;
                                </tr>";
                                    

                                $result .= "  </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>                                        
            </div>";
            echo $result;

                }
                                                
            }
                                                                  
                                

        ?>
        <footer class="main-footer">

            &copy Mubeen Ghauri P176107 & Mubariz Khan P180010 | FAST-NU | 2019-2020
          </footer>

          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</body>

</html>
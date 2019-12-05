<?php
    include "../connection.php";
    
  session_start();

    
	// session_start();
	if(!isset($_SESSION['admin'])) {
		echo "admin not set";
		header("location:index.html");
    }  
    
    echo $_SESSION['admin'];
?>


<!DOCTYPE html>
<html>
    <head>
        <title> User details </title>
    </head>

    <link rel="stylesheet" type="text/css" href="./../css/searchbooks.css">
    
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">


    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container collapse navbar-collapse" id="navbarSupportedContent">
                    
                <a class="navbar-brand" href="#"> <img src="./../logo-FAST-NU.png" width="90" height="90"> <span id = "space"> Simple Library Management System </span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"> </span>
                    </button>
        
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

            <div class="body-heading">
                Search Users!
                
                <div class='md-form mt-0'>
                <input name= 'rn' class='form-control' type='text' placeholder='Search' aria-label='Search'>
                </div>

              
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
                            <strong>User Profile</strong><br>

                            <?php 
                                
                               

                                $qry = "SELECT * FROM _user_ WHERE roll_no = '".rn."'";
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
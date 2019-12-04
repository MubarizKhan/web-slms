<?php 


include "connection.php";
session_start();

    $username = $_GET["username"];
    $password = $_GET["pass"];
    $roll_no = $_GET["roll_no"];
    $email = $_GET["email"];
    $address = $_GET["address"];
    $city = $_GET["city"];
    $blood_group = $_GET["blood_group"];

    $qry = " SELECT roll_no FROM _user_ WHERE roll_no='".$roll_no."' ";
    $res = $con->query($qry);

    if ($res->num_rows > 0)
    {
        $msg = "user id already exists!";
        echo "$msg" ;
    }

    else
    {
        $query1 = " INSERT INTO _user_(u_name, u_password, roll_no, u_address, blood_group, city, u_email) values ('".$username."', '".$password."', '".$roll_no."', '".$address."' , '".$blood_group."', '".$city."' ,  '".$email."')";  
        
        if($con->query($query1))
        {
            $msg = "Values have been inserted";
            echo $msg;
        }

        else{
            $msg = "<script>alert('Data not entered')</script>";
        }
    
    
    }
    




?>


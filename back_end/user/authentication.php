<?php 
session_start();

include "./connection.php";

    $roll_no = $_GET["roll_no"];
    $password = $_GET["pass"];

    $_SESSION["roll_no"] = $roll_no;
    

    $qry = "SELECT * FROM _user_ WHERE roll_no = '".$roll_no."' ";

    $res = $con->query($qry);
    $msg = "";

    if ($res->num_rows > 0)
    {
        $row = $res->fetch_assoc();

        if($row["u_password"] == $password)
        {
            // $_SESSION["user"] = $user;
            $msg = "Password is working";
            echo $msg;

            header("Location:user_details.php");
            // echo $msg;
        }

        else
        {
            
            $msg = "pw incorrect";
            echo $msg;
        }
    }

    else
    {
        $msg = " ".$roll_no." does not exist";
        echo $msg;
    }
       
    
    


    // echo $roll_no;

    // $qry = " SELECT roll_no FROM _user_ WHERE roll_no='".$roll_no."' ";
    // $res = $con->query(qry);

    // if ($res->num_rows > 0)
    // {
    //     $msg = "user id already exists!";
    //     echo "$msg" ;
    // }

    // else
    // {
    //     $query1 = " INSERT INTO _user_(u_name, u_password, roll_no, u_address, blood_group, city, u_email) values ('".$username."', '".$password."', '".$roll_no."', '".$address."' , '".$blood_group."', '".$city."' ,  '".$email."')";  
        
    //     if($con->query($query1))
    //     {
    //         $msg = "Values have been inserted";
    //         echo $msg;
    //     }

    //     else{
    //         $msg = "<script>alert('Data not entered')</script>";
    //     }
    
    
    // }
    




?>


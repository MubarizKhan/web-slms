<?php
    
    include "connection.php";
    session_start();

    // $_SESSION["roll_no"];
    // echo $_SESSION["roll_no"];


    $title = $_POST["book_title"];
    $b_id = $_POST["book_id"];
    $s_name = $_POST["student_name"];
    $roll_no = $_POST["roll_no"];
    $Serial_BookID = $_POST["Serial_BookID"];
    $date = $_POST["date"];

    // echo $roll_no;



    $qry = "SELECT * FROM _user_ WHERE roll_no = '".$roll_no."' ";
    // $qry2 = " UPDATE admins SET password='".$new_pass."' WHERE username='".$user."' ";
    
    $qry_2 = " UPDATE _user_ SET books_borrowed ='".$title."' WHERE roll_no ='".$roll_no."' ";
    // $con = 
    $res = $con->query($qry);

    if ($res->num_rows > 0)
    {
        echo username."<--OFF";
        // $row = $res->fetch_assoc();
        $res2 = $con->query($qry_2);
        echo "<script>alert('Book ? Borrowed!')</script>";


    
    }

    else
    {
        $msg = "This is not working";
        echo $msg;
    }





?>
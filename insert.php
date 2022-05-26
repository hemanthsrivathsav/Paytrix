<?php
include "dbConn.php"; // Using database connection file here


if(isset($_POST['submit']))
{		
    $instname = $_POST['instname'];
    $instbranch = $_POST['instbranch']; 
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $uniid = $_POST['uniid']; 
    $course = $_POST['course']; 
    $studbranch = $_POST['studbranch'];
    $semester  = $_POST['semester'];
    $no  = $_POST['no'];
    $email  = $_POST['email'];
    $address  = $_POST['address'];
    $zip  = $_POST['zip'];
    
    $insert = mysqli_query($db," INSERT INTO `makepay` VALUES (101,'$instname','$instbranch','$name','$dob','$uniid','$course','$studbranch','$semester','$no','$email','$address','$zip')");
    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
       
        header("Location:paymentpage.html");
    }
}

mysqli_close($db); // Close connection
?>
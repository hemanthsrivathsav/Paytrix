<?php
include "dbConn.php"; // Using database connection file here
if(isset($_POST['submit']))
{		

    $ans = $_POST['ans'];
    $name = $_POST['name'];
    $accno = $_POST['accno'];
    $accnocc = $_POST['accnocc'];
    $cvv = $_POST['cvv'];
    $exp = $_POST['exp'];
    $amount = $_POST['amount'];
    
    
    

    $insert = mysqli_query($db," INSERT INTO `payment` VALUES (101,'$ans','$name','$accno','$accnocc','$cvv','$exp','$amount')");
        $records = mysqli_query($db,"select * from makepay order by id desc"); 
        $data = mysqli_fetch_array($records);
       
            

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo("Your Payment has been Accepted : ");
        echo("id no - ");
        echo $data['id']; 
        
    }
    echo "<br>";
    echo "<input type='button' value='click here' onclick=window.location='viewsm.php'>";

    echo "<script>
        function save(){ alert('save func');}
        </script>";


        echo "<br>";
        echo "<input type='button' value='HOME' onclick=window.location='home.html'>";
    
        echo "<script>
            function save(){ alert('save func');}
            </script>";
}

mysqli_close($db); // Close connection
?>
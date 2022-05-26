<!DOCTYPE html>
<html>
<head>
  <title>DATA TABLE</title>
</head>
<body>


<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>



        <?php
        include "dbConn.php"; 
        $records = mysqli_query($db,"select * from makepay order by id desc");
        $records1 = mysqli_query($db,"select amount from payment order by id desc");
        echo "<table border='1'>

     <tr>
     <th>STATUS</th>
     <th>Institution Name</th>
     <th>Name</th>
     <th>Institution Branch </th>
     <th>DOB</th>
     <th>University id</th>
     <th>Course</th>
     <th>Branch</th>
     <th>Phone No</th>
     <th> ID </th>
     </tr>"; 
     
        $data = mysqli_fetch_array($records);
        
       ?>
           <?php echo"<tr>";?>
           <h4><?php echo "<td> Payment Completed </td>";?></h4>  
            <h4><?php echo "<td>".$data['instname']."</td>";?></h4>  
            <h4><?php echo "<td>".$data['name']."</td>";?></h4>
            <h4><?php echo "<td>".$data['instbranch']."</td>";?></h4>
            <h4><?php echo "<td>".$data['dob']."</td>";?></h4>
            <h4><?php echo "<td>".$data['uniid']."</td>";?></h4>
            <h4><?php echo "<td>".$data['course']."</td>";?></h4>
            <h4><?php echo "<td>".$data['studbranch']."</td>";?></h4>     
            <h4><?php echo "<td>".$data['no']."</td>";?></h4> 
            <h4><?php echo "<td>".$data['id']."</td>";?></h4> 
            <br>
            <?php echo"</tr>";?>
      
     <?php
        
        ?>
       
</div>
</div>

    </section>    

     
</body>
</html>
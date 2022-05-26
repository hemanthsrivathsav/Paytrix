<!DOCTYPE html>
<html lang="en">
<head>

     <title>WhatNext?</title>

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


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="Home.html" class="navbar-brand">WhatNext?</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="home.html">Home</a></li>
                         <li class="active"><a href="form.php">Form</a></li>
                         <li><a href="about-us.html">About Us</a></li>
                         <li><a href="blog-posts.html">Useful Links</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- CONTACT -->
     <section id="">
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-12">

                         <form action="insert.php" method="POST">

                              <div class="col-md-13 col-sm-12">
                                   <h1>Enter your Information</h1>
                                   <br>
                                   <input type="text" id="name" class="form-control" placeholder="Enter full name" name="name" required>
                                   <br>
                                   <input type="email" id="email" class="form-control" placeholder="Enter email address" name="email" required>
                                   <br>
                                   <input type="number"  min="1" max="1000" id="gpa" class="form-control" placeholder="Enter Total GPA" name="gpa" required>
                                   <br>
                                   <input type="number"  min="1" max="1000" id="grescore" class="form-control" placeholder="Enter GRE Score" name="grescore" required>
                                   <br>
                                   <input type="number"  min="1" max="1000" id="gatescore" class="form-control" placeholder="Enter GATE Score" name="gatescore" >
                                   <br>
                                   <input type="number"  min="1" max="1000" id="catscore" class="form-control" placeholder="Enter CAT Score" name="catscore" >
                                   <br>
                                  
                                        <form action="/">
                                        <select name="interests">
                                             <option value="">Select Your Interests</option>
                                             <option value="Software Development">Software Development</option>
                                             <option value="Research">Research</option>
                                             <option value="Management Studies">Management Studies</option>
                                        
                                        </select>
                                        <br>
                                        <br>
                                        <select name="hobbies">
                                             <option value="">Select Your Hobbies</option>
                                             <option value="Art">Art</option>
                                             <option value="Sports">Sports</option>
                                             <option value="Gaming">Gaming</option>
                                             <option value="Competitive Coding">Competitive Coding</option>
                                             <option value="Reading Fiction/Non-Fiction">Reading Fiction/Non-Fiction</option>
                                        </select>
                                       
                                   </form>
                                 
                                   <div class="submitformat">
                                        <br>
                                        <input type="submit" name="submit" value="Submit"> <a href="view.php"></a></input>
                                    <div>    
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </section>       

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>212 Barrington Court <br>New York, ABC 10001</p>
                              </address>
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 WhatNext?</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+1 333 4040 5566</p>
                                   <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                              </address>
                         </div>
                    </div>                    
               </div>
          </div>
     </footer>



     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
<?php require_once "connection.php";

session_start();

if (isset($_SESSION['user']) && $_SESSION['user'])
{    #Checking user is logged in or not
    $user = $_SESSION['user'];
}


?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ORAAS</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- php5 Shim and Respond.js IE8 support of php5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="font-size:25px">ORAAS</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="accident_info.php">Accident Info</a>
                        </li>
                        <li>
                            <a href="accident_statistics.php">Accident Statistics</a>
                        </li>
                        <li>
                            <a href="events.php">Events</a>
                        </li>
                        <li>
                            <a href="government_rules.php">Government Rules</a>
                        </li>

                        <li>
                            <a href="complain_opinion.php">Complain & Opinion</a>
                        </li>
                        
                         <?php if ($user) { ?>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log out <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                       <li><a href="logout.php">Log out</a></li>
                       <li><a href="profile.php">Profile</a></li>
                       </ul>

                        <?php }else{ ?>

                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                         <li>
                                <a href="user_login.php">User Login</a>
                            </li>
                           
                            <li>
                                <a href="admin_login.php">Admin Login</a>
                            </li>

                             <li>
                                <a href="registration.php">Sign up</a>
                            </li>
                           
                            <li>
                                <a href="profile.php">Profile</a>
                            </li>


                        </ul>

                        </li>
                       
                       <?php } ?>
                </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center">ABOUT US</h1>
                </div>
            </div>
            <!-- /.row -->

            <!-- Intro Content -->
            <div class="row">
                <div class="col-md-12">
                    <p style="font-family:Times New Roman;font-size:20px">The objectives of this application  is  to developed a system of recording the information of  regular 
                    happening road accident
                     and analyzing the roads to preventing road accident. Todays road accident is a regular issues in our country as well as in the world. 
                     Our online road accident analysis system would be helpful for the police department and traffic authority as well as 
                     the general.</p>
                     <h4 style="font-style:bold;font-size:20px"> For this application our the working team introduction here.</h4>
                   
                    
                </div>
                
            </div>
            <!-- /.row -->

            <!-- Team Members -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header" style="text-align:center">Our Team</h2>
                     <h5></h5>

                </div>
                <div class="col-md-4 text-center">

                    <div class="about-image">
                        <img src="img/supervisor.jpg" alt="1">
                        <div class="image-text">
                            <h3>MD. TAHZIBUL ISLAM</h3>
                            <small>SUPERVISOR</small>
                            <p>Assistant Professor of DIU </p>

                        </div>
                    </div>                </div>
                <div class="col-md-4 text-center">

                    <div class="about-image">
                        <img src="img/me.jpg" alt="1">
                        <div class="image-text">
                            <h3>FARIDA AKTER</h3>
                            <small>Team Member</small>
                            <p>Student of DIU </p>

                        </div>
                    </div> 
                </div>
                <div class="col-md-4 text-center">

                    <div class="about-image">
                        <img src="img/prova.jpg" alt="1">
                        <div class="image-text">
                            <h3>SUBRINE KHANDAKAR</h3>
                            <small>Team Member</small>
                            <p>Student of DIU </p>

                        </div>
                    </div> 
                </div>
                <div class="col-md-4 text-center">

                    <div class="about-image">
                        <img src="img/mokti.jpg" alt="1">
                        <div class="image-text">
                            <h3>MURSHIDA PARVIN</h3>
                            <small>Team Member</small>
                            <p>Student of DIU </p>

                        </div>
                    </div> 
                </div>

                  <div class="col-md-4 text-center">

                    <div class="about-image">
                        <img src="img/dider.jpg" alt="1">
                        <div class="image-text">
                            <h3>ISMILE HOSSAIN</h3>
                            <small>Team Member</small>
                            <p>Student of DIU </p>

                        </div>
                    </div> 
                </div>



                  <div class="col-md-4 text-center">

                    <div class="about-image">
                        <img src="img/tuli.png" alt="1">
                        <div class="image-text">
                            <h3>MUSHOFA MEHERIBAN</h3>
                            <small>Team Member</small>
                            <p>Student of DIU </p>

                        </div>
                    </div> 
                </div>
               

            </div>
            
            <!-- /.row -->

            <hr style="margin-top:0px;margin-bottom:0px">
           
            <!-- Link part -->
           
            
            <!-- Footer -->
            <footer class="welcome">
                   <div class="row">
            
                    <div class="col-md-6">
                
                         <p>Copyright © (CSE 29th Batch(Day)DIU)</p>
                    </div>
                    <div class="col-md-6 text-right">
                         <ul class="list-unstyled list-inline list-social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                            </li>
                        </ul>

                    </div>
                
             </div>
                
       </footer>

       

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>

    </body>

</html>
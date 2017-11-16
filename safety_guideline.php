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
                       </li>

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
                                <a href="profile.php"> See Profile</a>
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
            <h1 class="page-header">Safety Guideline</h1>
                <div class="col-lg-8">
                    
                    <p style="text-align:justify;font-size:18px;font-family:Times New Roman">Fatalities and accidents on the road occur because someone somewhere is not paying attention to 
                        road safety rules.There are a number of factors that come into interplay while traveling on the road.
                        There are road safety rules for drivers to follow as well as the pedestrians and other vehicles and passerby also.
                     </p>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8"> 

                    <!-- Pager -->
                    <ul>
                        <li><h4>Keep to the left :</h4></li>
						
							<p style="text-align:justify;font-size:17px;font-family:Times New Roman">Keep to the left while driving and allow vehicles from the opposite direction to pass.
							 Most head-on accidents happen as we fail to keep to the left and stay in the middle of the road. 
							 This is one of the most important road safety rules for drivers.</p>
                        
                        <li><h4>  Slow done on bends and turn :</h4></li>
                         <p style="text-align:justify;font-size:17px;font-family:Times New Roman">another mistake most 
                        people make is to never slow down on turns and bends. Be all the more 
                        cautious when negotiating bends and sharp turns.</p>

                        <li><h4>Move cautiously and slowly during congestion on roads</h4></li>
                      <p style="text-align:justify;font-size:17px;font-family:Times New Roman"> This is another very important road safety rule that most of us ignore. 
                       We should move carefully especially at the round-abouts and road junctions.</p>

                       <li><h4>Remain within the speed limit :</h4></li>
                             <p style="text-align:justify;font-size:17px;font-family:Times New Roman">This is common sense and a common one among road safety rules for drivers.
                            Keep in mind that the speed limit is related to the traffic condition of the area.
                           If you come within schools and hospitals, just slow down.</p>

                           <li><h4>Maintain the right distance :</h4></li>
                   <p style="text-align:justify;font-size:17px;font-family:Times New Roman">Often it is seen that collisions occur because adequate 
                 distance from the vehicle in front is not maintained. These are important road safety rules for drivers.</p>

                  <li><h4>Using Foot Over Bridge :</h4></li>
                   <p style="text-align:justify;font-size:17px;font-family:Times New Roman">The passerby should using foot over bridge for crossing the road.In high way roads it is very dangerous to 
                   crossing throw the road.If there is no over bridge then hands up for signal the driver to stop or slow down. </p>
                    </ul>

                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-4">

                   <img src="img/road-safety.jpg" style="width:400px;height:600px;align:middle">

                </div>
            </div>
                
        </div>
        
        <!-- /.row -->

        <hr>

        <!-- Footer -->
            <footer class="welcome">
                <div class="row">
                    <div class="col-md-6 ">
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

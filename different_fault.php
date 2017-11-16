<?php require_once "connection.php";

session_start();

if (isset($_SESSION['user']) && $_SESSION['user'])
{    #Checking user is logged in or not
    $user = $_SESSION['user'];
}
else
{
   
    header("location:user_login.php");
}


?>

<!DOCTYPE html>
<php lang="en">

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
                        <li >
                            <a href="accident_info.php">Accident Info</a>
                        </li>
                        <li class="active">
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
                   <h1 class="page-header" style="text-align:center">How many Accident occur for Different Causes Yearly</h1>

                    
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <!-- Sidebar Column -->
                <div class="col-md-3">
                    <div class="list-group">
                        
                        <a href="monthly_rates.php?page=1" class="list-group-item" style="color:black">Monthly Accident rates</a>
                        <a href="yearly_rates.php?page=1" class="list-group-item" style="color:black">Yearly Accident rates</a>
                        <a href="high_risk_roads.php?page=1" class="list-group-item" style="color:black">The High Risky Roads</a>
                        <a href="different_fault.php?page=1" class="list-group-item" style="color:black">Based On Causes</a>
                     
                    </div>
                </div>
                <!-- Content Column -->
                 <div class="col-md-9">


                 <form method="POST" action="d_search.php">
                    <input class="btn btn-md btn-default btn-block" style="float: right;width:20%;margin-bottom:10px" type="text" name="year" placeholder="Search By Year" >
                </form>

                 <?php 

                        $page=$_GET["page"];

                        //echo $page;

                        if($page=="1")
                        {
                                $page1=0;
                        }

                           
            

                        else
                        {
                             $page1=($page*8)-8;
                        }

                        
                        $sql = "SELECT*FROM driver_fault ";
                        $res1 = mysql_query($sql) or die(mysql_error());

                        $row = mysql_num_rows($res1);

                        //echo $row;
                        $a = $row/8;
                        $a = ceil ($a);


                ?>

                
                <table border="1" width="100%">
                    <thead>
                        <tr>
                           

                             <?php if(isset($_SESSION['user']) && $_SESSION['user']['username'] =='farida') { ?>
                                 <th colspan="8" style="text-align:center" >Accident Rate</th>

                           <?php  }

                            else { ?>



                              <th colspan="6" style="text-align:center" >Accident Rate</th> 


                              <?php } ?>

                        
                    
                        </tr>

                        <tr>
                                <th style="text-align:center">Year</th>
                                <th style="text-align:center">Driver sleeping</th>
                                <th style="text-align:center">Overtaking</th>
                                <th style="text-align:center">Driver drunk</th>
                                <th style="text-align:center">Over speed</th>
                                <th style="text-align:center">Road fault</th>
                                 <?php if(isset($_SESSION['user']) && $_SESSION['user']['username'] =='farida') { ?>
                                 <th style="text-align:center" colspan="2">Action</th>

                            <?php } ?>

                        </tr>




                    </thead>
                    <tbody>
                        <?php 
                              $sql = "SELECT*FROM driver_fault LIMIT $page1,8";

                              $res = mysql_query($sql) or die(mysql_error());

                             while ($data = mysql_fetch_assoc($res)) { ?>
                            <tr style="text-align:center">
                                <td><?php echo $data['year'] ?></td>
                               
                                <td><?php echo $data['driver_sleeping'] ?></td>
                                <td><?php echo $data['overtaking'] ?></td>
                                <td><?php echo $data['driver_drunk'] ?></td>
                                <td><?php echo $data['over_speed'] ?></td>
                                <td><?php echo $data['road_fault'] ?></td>
                                 <?php if(isset($_SESSION['user']) && $_SESSION['user']['username'] =='farida') { ?>
                                        <td>
                                            <a href="d_update.php?id=<?php echo $data['id']; ?>" style="color:black">Update</a>
                                        </td>
                                        
                                        <td>
                                            <a href="d_delete.php?id=<?php echo $data['id']; ?>" style="color:black">Delete</a>
                                        </td>
                                        
                                        
                                <?php } ?>
                            
                                
                            </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
           
                   <?php 
                    echo "Page";

                    for($b=1;$b<=$a;$b++)

                     {

                     ?> <a href="different_fault.php?page=<?php echo $b;?>" style="margin-right:5px;color:black"><?php echo $b; ?></a> <?php

                      }
                     ?>

                    <h2 style="text-align:center;margin-top:5px">Graphical view</h2><a class="btn btn-sm btn-default btn-block" href="different_fault_view.php" style="margin-left:295px;width:30%">CLICK HERE</a>
                   
                  <br>

                  </div>

            </div>
            <hr>
            <div class="row">
                   <div class="col-lg-12">

                    <div class="col-md-4">

                    <h3 style="text-align:center">Related Sites Link</h3>
                    <div class="list-group">
                     
                     <a href="http://www.rthd.gov.bd/" class="list-group-item" style="color:blue" target="_blank">Road Transport and Highways Division</a>
                     <a href="http://www.brtc.gov.bd/" class="list-group-item" style="color:blue" target="_blank">Bangladesh Road Transport Corporation</a>
                     <a href="https://www.facebook.com/brta.bd/" class="list-group-item" style="color:blue" target="_blank">Bangladesh Road Transport Authority</a>
                     <a href="http://wedemandsaferoadbd.org" class="list-group-item" style="color:blue" target="_blank">We Demand Safe Road (NISCHA)</a>     
                   </div>
                     
                    
                    
                    
                    </div>
                    <div class="col-md-4">
                    <h3 style="text-align:center">Quick Links</h3>
                      <div class="list-group">
                       
                            <a href="about.php" class="list-group-item" style="text-align:center;color:blue">About Us</a>
                            <a href="contact.php" class="list-group-item" style="text-align:center;color:blue">Contact Us</a>
                            <a href="traffic_rules.php" class="list-group-item" style="text-align:center;color:blue">Traffic Rules</a>
                            <a href="safety_guideline.php" class="list-group-item" style="text-align:center;color:blue">Safety Guideline</a>

                  
                          
                      </div>
                    </div>

                    <div class="col-md-4">
                    <h3 style="text-align:center">Site Information</h3>
                      <div class="list-group">
                       
                            <h4 class="list-group-item">
                            <p style="font-size:20px;text-align:center;margin-bottom:18px">Site Published:10 January 2017</p>
                            <p style="font-size:20px;text-align:center;margin-bottom:18px">Last Update: 31 January 2017</p>
                            <p style="font-size:20px;text-align:center;margin-bottom:18px"><script> document.write("Total Visitors: " + localStorage.pagecount + "");</script></p>
                            <a href="http://localhost/update_project/project/index.php" style="font-size:20px;color:blue;text-align:center;margin-left:130px" target="_blank">Old Site</a>
                          
                           
                           </h4>

                  
                          
                      </div>
                    </div>
                   </div> 
                   
                </div>
             </div>
            

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

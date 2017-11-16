<?php require_once "connection.php";

session_start();

if (isset($_SESSION['user']) && $_SESSION['user'])
{    #Checking user is logged in or not
    $user = $_SESSION['user'];
}
else
{
    //echo "For this page acess you have to login first";
    header("location:user_login.php");
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
                    <a class="navbar-brand" href="index.php">ORAAS</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
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
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">ADD NEW ACCIDENT INFORMATION</h1>
                    
                   <div class="all-data-form">
                       
                        <form method="POST" action="info.php" enctype="multipart/form-data">
                             <label for="location">Location:</label><br />
                                <select name="division" id="division">
                                 <option>  Division  </option>
                                
                         <?php
                        $result = mysql_query("SELECT DISTINCT (division) FROM location"); 
                           if($result)
                          {
                         if(mysql_num_rows($result) == 0)
                            echo "No Result Found";
                        else
                        {
                            while($name = mysql_fetch_array($result))
                            {
                            ?>
                                <option value="<?php echo $name["division"] ?>"><?php echo $name["division"] ?></option>;
                                <?php
                            }
                        }
                           }
                    
                          ?>
                        </select>
                               <select name="district" id="district">
                                 <option>  District </option>
                                
                         <?php
                        $result = mysql_query("SELECT DISTINCT district FROM location"); 
                           if($result)
                          {
                         if(mysql_num_rows($result) == 0)
                            echo "No Result Found";
                        else
                        {
                            while($name = mysql_fetch_array($result))
                            {
                            ?>
                                <option value="<?php echo $name["district"] ?>"><?php echo $name["district"] ?></option>;
                                <?php
                            }
                        }
                           }
                     
                          ?>
                        </select>
                                <select name="thana" id="thana">
                                    <option>  Thana </option> 
                                      <?php
                        $result = mysql_query("SELECT DISTINCT thana FROM location"); 
                           if($result)
                          {
                         if(mysql_num_rows($result) == 0)
                            echo "No Result Found";
                        else
                        {
                            while($name = mysql_fetch_array($result))
                            {
                            ?>
                                <option value="<?php echo $name["thana"] ?>"><?php echo $name["thana"] ?></option>;
                                <?php
                            }
                        }
                           }
                      
                          ?>

                          </select>
                              <div class="form-group">
                                <label for="road">Road:</label>
                                <input type="text" class="form-control"  placeholder="road" name="road" required="required">
                              </div>
                              <div class="form-group">
                                <label for="time">Time:</label>
                                <input type="time" class="form-control"  placeholder="time" name="time" required="required">
                              </div>

                              <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control"  placeholder="date" name="date" required="required">
                              </div>

                              <div class="form-group">
                                <label for="number_of_death_person">Number Of Death Person:</label>
                                <input type="number" class="form-control"  placeholder="number of death person" name="number_of_death" required="required">
                              </div>

                              <div class="form-group">
                                <label for="number_of_injured_person">Number Of Injured Person:</label>
                                <input type="number" class="form-control"  placeholder="number of injured person" name="number_of_injured" required="required">
                              </div>


                              <div class="form-group">
                                <label for="image">Image</label>
                                <input class="upload" type="file" name="fileupload" required="required">
                               
                              </div>

                              <div class="form-group">
                                <label for="reference">Reference:</label>
                                <input type="text" class="form-control"  placeholder="reference" name="reference" required="required">
                              </div>

                             
                              <button type="submit" class="btn btn-default" name="submit" value="submit">Submit</button>
                            </form>
                   </div>
                   					
            </div>
              
            </div>
            <!-- /.row -->

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



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
                        <li class="active">
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
                <div class="col-lg-9">
                    <h1 class="page-header" style="font-size:25px">Complain & Opinion </h1>
                     <p style="font-family:Times New Roman;font-size:18px"> You can Submit your opinions on road safety specifically for identification of black spots (accident prone area) with Ministry of Road 
                     Transport and Highways. You can also can complain about any problem issues on the time of traveling or fault of any driver or traffic indiciplain.
                     Your  complain will be help to solve the traffic problems and any opinion will be helpful for the people.</p>

                     <h4>The previous complain and opinion collected from people</h4>


                     <?php 
                 $sql = "SELECT * FROM complain_opinion";
            
                 $res = mysql_query($sql) or die(mysql_error());


                ?>
               
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align:center" >Name</th>
                            <th style="text-align:center">Road Name</th>
                            <th style="text-align:center">Complain Or Opinion</th>     
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysql_fetch_assoc($res)) { 
                          
                          if($data['is_approval']==1) {



                            ?>

            
                            <tr>
                                <td style="font-family:Times New Roman;text-align:justify;font-size:18px"><?php echo $data['name'] ?></td>
                               
                                <td style="font-family:Times New Roman;text-align:center;font-size:18px"><?php echo $data['road_name'] ?></td>

                                <td style="font-family:Times New Roman;text-align:justify;font-size:18px"><?php echo $data['complain'] ?></td>
                            
                                
                            </tr>
                            
                        <?php } } ?>
                    </tbody>
                </table>
           

                     
                </div>

                 <div class="col-lg-3">
                    <h1 class="page-header" style="font-size:25px">For Complain/Opinion:</h1>

                    <form method="POST" >
                           
                        
                            <label>Enter Your Name :</label><br />
                            <input type="text" name="name" required data-validation-required-message="Please enter data"><br />

                            <label>Enter Road Name :</label><br />
                            <input type="text" name="road_name" required data-validation-required-message="Please enter data" ><br />
                         
                            <label>Complain or Opinion :</label><br />
                            <textarea name="conplain" rows="5" cols="25" required data-validation-required-message="Please enter data"></textarea><br />
                        
                            
                            <input type="submit" value="Save" name="submit">
                    </form>	


                 </div> 
            </div>

             <hr>

              <!-- Link part -->
           
            
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

        
        <!-- /.container -->
      

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



<?php
require_once "connection.php";



if(isset($_POST['submit'])){
  //var_dump($_POST);



  $name = $_POST["name"];

  $road_name = $_POST["road_name"];

  $complain = $_POST["conplain"];


  $sql= "INSERT INTO `project_data`.`complain_opinion` (`id`, `name`, `road_name`, `complain`,`is_approval`) VALUES (NULL, '$name', '$road_name', '$complain',0)";


 $res =mysql_query($sql);
  if($res)

  {

    header("location:complain_opinion.php");

   
  }


  else
  {
     echo"data is not inserted";
      
 }

}

?>
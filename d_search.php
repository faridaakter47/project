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

       <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header" style="text-align:center">Your Search Related Result </h1>

                    
                </div>
            </div>
            <!-- /.row -->


            <div class="row text-center">
                <!-- Sidebar Column -->
                <div class="col-md-12">


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


if (isset($_POST['year'])) { 

              
				$search= $_POST['year'];
				//echo"$search";
				//print_r("$_POST");
				?>
				

                <table border="1" width="50%" align="center">
                    <thead>
                                 <tr >

                                <th style="text-align:center">Year</th>
                                <th style="text-align:center">Driver sleeping</th>
                                <th style="text-align:center">Overtaking</th>
                                <th style="text-align:center">Driver drunk</th>
                                <th style="text-align:center">Over speed</th>
                                <th style="text-align:center">Road fault</th>

                                </tr>
                    </thead>
                    <tbody>
                    <?php

                      $sql = "SELECT*FROM  `driver_fault` WHERE  `year` LIKE  '%$search%'";

                     $res = mysql_query($sql);
                    
                          //var_dump($data);
				         

				         while( $data = mysql_fetch_assoc($res)){ ?>
                       

                       
                            <tr style="text-align:center">
                                <td><?php echo $data['year'] ?></td>
                                <td><?php echo $data['driver_sleeping'] ?></td>
                                <td><?php echo $data['overtaking'] ?></td>
                                <td><?php echo $data['driver_drunk'] ?></td>
                                <td><?php echo $data['over_speed'] ?></td>
                                <td><?php echo $data['road_fault'] ?></td>
                                
                            </tr>

                            <?php } ?>

                            </tbody>
                            
                    </tbody>
                </table>

			<?php } ?>
			

        </div>
            
            </div>

            <a href="index.php" style="float:right;color:black;width:15%;margin-top:10px" class="btn btn-md btn-default btn-block">GO BACK HOME</a>

                </div>
     

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


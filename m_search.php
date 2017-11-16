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


if (isset($_POST['month'])) { 

              
				$search= $_POST['month'];
				//echo"$search";
				//print_r("$_POST");
				?>
				

                <table border="1" width="80%" align="center">
                    <thead>
                        <tr>
                            <th style="text-align:center">Year</th>
                            <th style="text-align:center">Month</th>
                            <th style="text-align:center">Accident Rate</th>
                            <th style="text-align:center">Number of death</th>
                            <th style="text-align:center">Number of injured</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                     <?php
                    $sql = "SELECT * FROM  `monthly_analysis` WHERE  `month` LIKE  '%$search%'";

				          $res = mysql_query($sql);
				         while($data = mysql_fetch_assoc($res)){ ?>
                       

                       
                            <tr style="text-align:center">
                                <td><?php echo $data['year'] ?></td>
                                <td><?php echo $data['month'] ?></td>
                                <td><?php echo $data['accident_rate'] ?></td>
                                <td><?php echo $data['number_of_death'] ?></td>
                                <td><?php echo $data['number_of_injured'] ?></td>

                           
                                
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


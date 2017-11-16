
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
                    <h1 class="page-header" style="text-align:center"> Update Information</h1>

                    
                </div>
            </div>
            <!-- /.row -->


            <div class="row text-center">
                <!-- Sidebar Column -->
                <div class="col-md-12">

           <?php
            require_once 'connection.php';

            
          $id = $_GET['id'];

           $sql = "SELECT * FROM driver_fault WHERE id=$id";

          $res = mysql_query($sql) or die(mysql_error());

          if ($res) {
           $data =mysql_fetch_assoc($res);

            //var_dump($data);

            ?>
                 <div class="all-data-form">
 
                 <form method="post" action="update_d.php?id=<?php echo $data['id'] ?>"><br>
                    <div class="form-group">
                   <label for="year">Year:</label><br>
                   <input type="text" name="year" value="<?php echo $data['year'] ?>" required="required"/>
                   </div>

                   <div class="form-group">
                   <label for="driver_sleeping">driver_sleeping:</label><br>
                   <input type="text"name="driver_sleeping" value="<?php echo $data['driver_sleeping'] ?>" required="required"/>
                   </div>


                   <div class="form-group">
                   <label for="overtaking">overtaking:</label><br>
                   <input type="text" name="overtaking" value="<?php echo $data['overtaking'] ?>" required="required"/>
                   </div>
           
                   <div class="form-group">
                   <label for="driver_drunk">driver_drunk:</label><br>
                   <input type="text" name="driver_drunk" value="<?php echo $data['driver_drunk'] ?>" required="required"/>
                   </div>

                    <div class="form-group">
                   <label for="over_speed">over_speed:</label><br>
                   <input type="text" name="over_speed" value="<?php echo $data['over_speed'] ?>" required="required"/>
                   </div>

                    <div class="form-group">
                   <label for="road_fault">road_fault:</label><br>
                   <input type="text" name="road_fault" value="<?php echo $data['road_fault'] ?>" required="required"/>
                   </div>

            
            <input type="submit" name="Submit" value="submit"/>
        </form>

        </div>

     <?php    
     }  ?>



        </div>
            
            </div>

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



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Accident add page</title><link rel="stylesheet" type="text/css" href="style.css">

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

           <div class="row text-center">
                <!-- Sidebar Column -->
                <div class="col-md-12">
<?php 
session_start();

    require_once('connection.php');	
?>

		<?php 
       if (isset($_POST['submit'])) {
            $division = $_POST['division'];
            $district = $_POST['district'];
            $thana = $_POST['thana'];
            $road = $_POST['road'];
            $time = $_POST['time'];
            $date = $_POST['date'];
            $number_of_death =$_POST['number_of_death'];
            $number_of_injured =$_POST['number_of_injured'];
            $reference = $_POST['reference'];

          /*Image Upload*/
            $temp = $_FILES['fileupload']['tmp_name'];
            $name_img = $_FILES['fileupload']['name'];
            /*Divide name*/
            $div = explode('.', $name_img);
            $exten = end($div);
            $name_img = mktime() . '.' . $exten;
            $name_img = 'upload/' .  $name_img;
            move_uploaded_file($temp, $name_img);

            $user_id = $_SESSION['user']['id'];
            $user_name = $_SESSION['user']['username'];

   

                               

         $sql = "INSERT INTO accident_info(division, district, thana, road, time, date, number_of_death, number_of_injured, image,reference,is_approval,user_id,user_name) VALUES 
         ('$division','$district','$thana','$road','$time','$date','$number_of_death','$number_of_injured','$name_img','$reference',0,'$user_id','$user_name')";
            
            if (mysql_query($sql)) { ?>

                <h3 style="text-align:center;font-size:20px">Your data will be added after admin approval</h3> 
            <div>

            <a href="accident_info.php" style="float:right;color:black;width:15%;margin-top:10px" class="btn btn-md btn-default btn-block">Previous Page</a>

                </div>

                            
           <?php  }
            else{

                ?> <h1>Information is not added as you do not give data properly</h1><?Php
                 //echo"$sql";
            }
        }



?>


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
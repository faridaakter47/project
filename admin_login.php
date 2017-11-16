<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin login</title>

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

        

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <div class="row text-center">
                <div class="col-lg-12">

               <div class="all-data-form">

                <h1> Admin Login</h1>
               <form method="post">
    	       
                  <div class="form-group">
                      <label for="road">Username</label><br>
                       <input type="text" class="form-control"name="username" placeholder="username" required="required">
                     </div>

                  <div class="form-group">
                       <label for="road">Password:</label><br>

                       <input type="password"class="form-control"  name="password" placeholder="password" required="required">
                  </div>
                <button style="width:50%;margin-left:150px" type="submit" class="btn btn-primary btn-block btn-large" name="submit">Submit</button>
             </form>
                    

            
            </div>
        </div>

     </div>

   </div>
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
require_once"connection.php";

session_start(); 

if(isset($_SESSION['user'])){

  $user=$_SESSION['user'];


}

?>

<?php


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
    $password = $_POST['password'];
    
 	$sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";

	if ($query= mysql_query($sql)) {
		$data = mysql_fetch_assoc($query);

		if($_POST['username']==$data['username'] && $_POST['password']==$data['password'] )
		{
                $_SESSION['user'] = $data;
            header('location:accident_statistics.php');


		}

		else{

	          ?>  <h2 style=" text-align:center;margin-top:20px">Only Admin can Login</h2> <?php 
          }


	}



}

?>

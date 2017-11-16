
<?php require_once "connection.php";?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sign up Form</title>

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
                  <h1 align="center">Sign Up</h1>
                  <form action="fileupload.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="username"> UserName:</label><br>
                       <input type="text" class="form-control" name="username" placeholder="name" required="required">
                    </div>
    	
    	             <div class="form-group">
                      <label for="email">Email:</label><br>
                       <input type="email" class="form-control" name="email" placeholder="email" required="required">
                     </div>

                      <div class="form-group">
                       <label for="password">Password:</label><br>

                       <input type="password"class="form-control"  name="password" placeholder="password" required="required">
                      </div>
                      
                      <div class="form-group">
                       <label for="address">Address:</label><br>

                       <input type="text" class="form-control" name="address" placeholder="address" required="required">

                      </div>

                      <div class="form-group">
                       <label for="contact">Mobile Number:</label><br>

                        <input type="text" class="form-control" name="mobile" placeholder="mobile" required="required">

                      </div>


                      <div class="form-group">
                       <label for="image"> Image:</label><br>

                       <input type="file" style="margin-left:180px"  name="fileupload" required="required">

                     </div>   

       
                    <input type="submit" value="submit" name="submit"><br>
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



 
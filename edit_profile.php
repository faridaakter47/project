
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
                    <h1 class="page-header" style="text-align:center"> Update Your Profile</h1>

                    
                </div>
            </div>
            <!-- /.row -->


            <div class="row text-center">
                <!-- Sidebar Column -->
                <div class="col-md-12">



                
                  <?php  


                        $id=$user['id'];

                        $name = $user['username'];

                        //echo "$id";
                        // echo "$name";

                        if($user['username']==farida)
                         {

                                $sql = "SELECT * FROM admins WHERE id=$id";


                               $res = mysql_query($sql) or die(mysql_error());
                      
                             $data = mysql_fetch_array($res) ; 
                //var_dump($data);

                   ?>
                   <div class="all-data-form">
                   <form method="post" action="update1.php?id=<?php echo $data['id'] ?>"><br>

                   <div class="form-group">
                   <label for="name">Name:</label><br>
                   <input name="name" value="<?php echo $data['name'] ?>" required="required"/>
                   </div>

                   <div class="form-group">
                   <label for="username">Username:</label><br>
                   <input name="username" value="<?php echo $data['username'] ?>" required="required"/>
                   </div>

                   <div class="form-group">
                   <label for="email">Email:</label><br>
                   <input name="email" value="<?php echo $data['email'] ?>" required="required"/>
                   </div>

                   <div class="form-group">
                   <label for="password"> Password:</label><br>
                   <input name="password" value="<?php echo $data['password'] ?>" required="required"/>
                   </div>
                
                   <input type="submit" name="Submit" value="submit"/>
                  </form>

                 </div>

     <?php    
          } 
              
      else{
    
             
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$id";

    $res = mysql_query($sql) or die(mysql_error());

    if ($res) {
        $data =mysql_fetch_assoc($res);

        //var_dump($data);
        ?>
        <form method="post" action="update.php?id=<?php echo $data['id'] ?>"><br>
                  <div class="form-group">
                   <label for="username">Username:</label><br>
                   <input name="username" value="<?php echo $data['username'] ?>" required="required"/>
                   </div>

                   <div class="form-group">
                   <label for="email">Email:</label><br>
                   <input name="email" value="<?php echo $data['email'] ?>" required="required"/>
                   </div>


                   <div class="form-group">
                   <label for="password">Password:</label><br>
                   <input name="password" value="<?php echo $data['password'] ?>" required="required"/>
                   </div>
           
                   <div class="form-group">
                   <label for="address">Address:</label><br>
                   <input name="address" value="<?php echo $data['address'] ?>" required="required"/>
                   </div>

                    <div class="form-group">
                   <label for="mobile">Mobile number:</label><br>
                   <input name="mobile" value="<?php echo $data['mobile'] ?>" required="required"/>
                   </div>

            
            <input type="submit" name="Submit" value="submit"/>
        </form>

     <?php    
    } } ?>



        

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





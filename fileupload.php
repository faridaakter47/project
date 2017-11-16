<!DOCTYPE html>
<html lang="en">
	<head><meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Registation success page</title><link rel="stylesheet" type="text/css" href="style.css">
		 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

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
               
                <div class="col-md-12">
		<?php
		      session_start();
			require_once("connection.php");

           if (isset($_POST['submit'])) {
           	//var_dump($_POST);
		  
			$name = $_POST['username'];
		    $email = $_POST['email'];
		    $password = $_POST['password'];
		    $address = $_POST['address'];
		    $mobile = $_POST['mobile'];
		    
				
				
				 /*Image Upload*/
            $temp = $_FILES['fileupload']['tmp_name'];
            $name_img = $_FILES['fileupload']['name'];
            /*Divide name*/
            $div = explode('.', $name_img);
            $exten = end($div);
            $name_img = mktime() . '.' . $exten;
            $name_img = 'upload/' .  $name_img;
            move_uploaded_file($temp, $name_img);
	  
		

			

                         $sql = "INSERT INTO users (username, email, password, address,mobile, image) VALUES('$name','$email','$password','$address','$mobile','$name_img')";
                        
                         $res =mysql_query($sql);
                         //echo "$res";


			
				if($res)
				{?>
				       <h2 style="text-align:center">Registation Successfull</h2><br>

					   <h2 style="text-align:center">Now You can login</h2><br>
					   <a href="user_login.php" style="margin-top:20px;width:15%;margin-left:500px" class="btn btn-md btn-default btn-block">Login</a>

					   
 
				<?php } 
				else
				{ 
					
				
                echo"Registration not successfull";
					
				
				}

           }

       ?>



       </div>
    </div>
</div> 


</body>
</html>
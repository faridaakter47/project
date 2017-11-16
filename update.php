<?php
         //var_dump($_POST);
        session_start();
         require_once"connection.php";
          //var_dump($_POST);
       
            
            $id = $_GET['id'];
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
           
    
    
      
        $sql = "UPDATE users SET username='$name',email= '$email',password= '$password',address='$address',mobile=$mobile WHERE id=$id";
         
    //var_dump($sql); die();
    
          if(mysql_query($sql)){
            
            header('location:profile.php');
        }

        else{ 

            //var_dump($sql)

            echo "There some problem.Your profile can not update now";
            }
    
?>


<?php
         //var_dump($_POST);
        session_start();
         require_once"connection.php";

           //var_dump($_POST);
       
            
            $id = $_GET['id'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
      
           
    
    
      
        $sql = "UPDATE admins SET name='$name',username='$username',email= '$email',password= '$password' WHERE id=$id";
         
    //var_dump($sql); die();
    
          if(mysql_query($sql)){
            
            header('location:profile.php');
        }

        else{ 

            //var_dump($sql)

            echo "There some problem.Your profile can not update now";
            }
    ?>


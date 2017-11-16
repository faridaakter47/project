<?php
        
         require_once"connection.php";
          //var_dump($_POST);
       
          if(isset($_POST))
           {
            $id = $_GET['id'];
            $year = $_POST['year'];
            $driver_sleeping = $_POST['driver_sleeping'];
            $overtaking = $_POST['overtaking'];
            $driver_drunk = $_POST['driver_drunk'];
            $over_speed = $_POST['over_speed'];
            $road_fault = $_POST['road_fault'];
           
    
    
      
        $sql = "UPDATE driver_fault SET year='$year',driver_sleeping= '$driver_sleeping',overtaking='$overtaking',driver_drunk='$driver_drunk',over_speed='$over_speed',road_fault='$road_fault' WHERE id=$id";
         
    //var_dump($sql); die();
    
          if(mysql_query($sql)){
            
            header('location:different_fault.php?page=1');
            //echo "success";
        }
         

       else{

        echo"Data not Updated";
       }
       
    }
?>


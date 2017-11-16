<?php
require_once 'connection.php';

session_start();

        $id=$_GET["id"];
        
        $sql=mysql_query("DELETE FROM driver_fault WHERE id=$id");
        if($sql){

                  header("location:different_fault.php?page=1");
            //echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }
    
    
?>
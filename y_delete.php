
<?php
require_once 'connection.php';

session_start();


        $id=$_GET["id"];
       
        
        $sql=mysql_query("DELETE FROM yearly_analysis WHERE id=$id");
        if($sql){

                  header("location:yearly_rates.php?page=1");
            //echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }
    
?>
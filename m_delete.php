
<?php
require_once 'connection.php';

session_start();


        $id=$_GET["id"];
        
        $sql=mysql_query("DELETE FROM monthly_analysis WHERE id=$id");
        if($sql){

                  header("location:monthly_rates.php?page=1");
            //echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }
    
?>
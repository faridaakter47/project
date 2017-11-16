
<?php
require_once 'connection.php';
session_start();


        $id=$_GET["id"];
        
        $sql=mysql_query("DELETE FROM road_analysis WHERE id=$id");
        if($sql){

                  header("location:high_risk_roads.php?page=1");
            //echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }
    
?>
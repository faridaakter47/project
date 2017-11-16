<?php
         require_once"connection.php";
          //var_dump($_POST);
       
          if(isset($_POST))
           {
            $id = $_GET['id'];
            $high_risk_road_name = $_POST['high_risk_road_name'];
            $yearly_accident_rate = $_POST['yearly_accident_rate'];
            $per_day = $_POST['per_day'];
          
    
      
        $sql = "UPDATE road_analysis SET high_risk_road_name='$high_risk_road_name',yearly_accident_rate= '$yearly_accident_rate',per_day= '$per_day' WHERE id=$id";
   

     if(mysql_query($sql)){

             //echo"Updated";
        header("location:high_risk_roads.php?page=1");

       }    


       else{

        echo"Data not Updated";
       }
    }
?>


<?php
        
         require_once"connection.php";
          //var_dump($_POST);
       
          if(isset($_POST))
           {
            $id = $_GET['id'];
            $year = $_POST['year'];
            $accident_rate = $_POST['accident_rate'];
            $number_of_death = $_POST['number_of_death'];
            $number_of_injured = $_POST['number_of_injured'];
           
    
    
      
        $sql = "UPDATE yearly_analysis SET year='$year',accident_rate= '$accident_rate',number_of_death='$number_of_death',number_of_injured='$number_of_injured' WHERE id=$id";
         
    //var_dump($sql); die();
    
          if(mysql_query($sql)){
            
            header('location:yearly_rates.php?page=1');
        }
         

       else{

        echo"Data not Updated";
       }
       
    }
?>


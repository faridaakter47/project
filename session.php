<?php
session_start();

if (isset($_SESSION['user']))
 {  
       
   #You can check User's Permissions	
 }

else
{
	header('location:login.php');
}
?>
<?php
include 'config.php';
 echo $ID = $_GET['Id'];
 mysqli_query($con,"DELETE FROM `tblcard` WHERE Id = $ID");
 header('location:contact1.php');
 

?>

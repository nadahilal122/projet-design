<?php
include 'config.php';
if (isset($_POST['update'])) {
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $NUMBER = $_POST['number'];
    $EMAIL = $_POST['email'];
    $IMAGE =$_FILES['image'];
    $PASSWORD=$_POST['pword'];
    print_r($_FILES['image']); 
    $img_loc= $_FILES['image']['tmp_name']; 
    $img_name = $_FILES['image'] ['name']; 
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);
    mysqli_query($con,"UPDATE `tblcard` SET `Name`='$NAME',`Number`='$NUMBER',`Email`='$EMAIL',`Image`='$img_des',`Password`=' $PASSWORD' WHERE Id='$ID' ");
    header("location:contact1.php");
     }
?>
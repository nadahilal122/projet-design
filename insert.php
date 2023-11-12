<?php
include 'config.php';
if ( isset($_POST['upload'])) {
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
    mysqli_query($con," INSERT INTO `tblcard`(`Name`, `Number`, `Email`, `Image`,`Password`) VALUES ('$NAME','$NUMBER','$EMAIL','$img_des','$PASSWORD')
    "); 
     header("location:contact1.php");
   
}
?>
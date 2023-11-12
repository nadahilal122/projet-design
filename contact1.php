<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
<button class="btn btn-primary"><a  class="text text-light" href="index.html">Main page</a></button>
  <center>
  <div class="container">
<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
     <?php
          include 'config.php';
          $pic = mysqli_query($con,"SELECT * FROM `tblcard`");
          while($row = mysqli_fetch_array($pic)){
          echo " 
              <tr>
                    
              <td> $row[Id] </td>
              <td> $row[Name] </td>
              <td> $row[Number] </td>
              <td> $row[Email] </td>
              <td> <img src='$row[Image]' width ='200px'  height='70px' </td>
              <td> $row[Password] </td>
              <td> <a href='delete.php? Id= $row[Id]' class= 'btn btn-danger'>Delete</a></td>
              <td> <a href='update.php? Id= $row[Id]' class= 'btn btn-danger'>Update</a></td>
      
              </tr>
              ";
          }

      ?>
    
  
  </tbody>
</table>
        </div>
        </center>
    
   
    
</body>
</html>
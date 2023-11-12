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
<?php
            include 'config.php';
            $ID = $_GET['Id'];
            $Record = mysqli_query ($con,"SELECT * FROM `tblcard` WHERE Id = $ID ");
            $data = mysqli_fetch_array($Record);
    ?>
   
     <center>
     <div class="contact-form">
                <form action="update1.php" method="POST" enctype="multipart/form-data">           
                    <div class="input-field">
                        <input type="text" value="<?php echo $data['Name']?>" placeholder="Your name" autocomplete="off"  name="name" required>
                    </div>

                    <div class="input-field">
                        <input type="email" value=" <?php echo $data ['Email']?>" placeholder="Your email" autocomplete="off"  required  name="email">
                    </div>

                    <div class="input-field">
                        <input type="text" value=" <?php echo $data ['Number']?>" placeholder="Phone number" autocomplete="off"  required name=" number">
                    </div>

                    <div class="input-field">
                    <input type="password" value=" <?php echo $data ['Password']?>" placeholder="Password" autocomplete="off"  name="pword" required >
                        
                    </div>

                    <div class="input-field">
                    
                   <td> <input type="file" value=" <?php echo $data ['Image']?>" autocomplete="off" required   name=" image"> <img src="<?php echo $data ['Image']?>" alt=""  width ='300px'  height='70px'></td>

                    </div>
                    <div class="input-field">
                        <input type="hidden" name="Id" value="<?php echo $data['Id']?>" placeholder="Your name" autocomplete="off"  required>
                    </div>

                    <div class="button-field">
                        <button  type="submit" name="update" class='btn btn-danger m-2'>Update</button>
                    </div>
                </form>
            </div>
     </center>
     

   
  
   
    
</body>
</html>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Update</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
 
    <link rel="stylesheet" href="css/login.css">
    <!-- icons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</head>
<body>
  <?php       
  $orderid=$_GET['userID'];
      include "db_connection.php";
      $view = "Select * FROM tbl_users WHERE user_ID = '".$orderid."'";
      $result = $conn->query($view);
      while($row=$result->fetch_assoc()){
  ?>

  <center>
  
  
 
  <div class="container" style="width:400px; margin-top:100px !important; padding:2%; background-color:#ECFFF0; box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;"> 
  <p class="login-close" style="margin-top:-40px;" onclick="location.href='profile.php'"><ion-icon name="close-outline"></ion-icon></p>
  <form method = "POST" >
    <!-- <img src="css/photos/usericon.png" alt="user" style="width:50%"> -->
    <h1 style="text-align:left;">Name:</h1>
    <input type = "hidden" id = "userid" name = "userid" value = "<?php echo $row['user_ID']?>" >
    <input type="text" id = "nameedit" name = "nameedit" value = "<?php echo $row['user_Fullname']?>"required style="width:100% !important;"><br>
    <h1 style="text-align:left;">Contact Number:</h1>
    <input type="text" id = "contactedit" name = "contactedit" value = "<?php echo $row['user_Contact']?>"required style="width:100% !important;"><br>
    <h1 style="text-align:left;">Address:</h1>
    <input type="text" id = "addressedit" name = "addressedit" required value="<?php echo $row['user_Address']?>" style="width:100% !important;"></input><br>
    <h1 style="text-align:left;">Email:</h1>
    <input type="text" id = "emailedit" name = "emailedit" value = "<?php echo $row['user_Email']?>"required style="width:100% !important;"><br>
    <h1 style="text-align:left;">Password:</h1>
    <input type="text" id = "passedit" name = "passedit" value = "<?php echo $row['user_Password']?>"required style="width:100% !important;"><br>
    <div style="margin: 24px 0;"> 
      <!-- <a href="#"><i class="fa fa-facebook"></i></a>  -->
    </div>

    <input class="button-update" type = "submit" name = "subEditUser" value = "Update Information">
    </form>
    </div>
    <?php }?>
    </center>
            
<script>
  function edit(){
    
  }
</script>

</body>
</html>
<?php
include "db_connection.php";
if(isset($_POST['subEditUser']))
{
    $userid=$_POST['userid'];
    $name = $_POST['nameedit'];
    $contact = $_POST['contactedit'];
    $address = $_POST['addressedit'];
    $email = $_POST['emailedit'];
    $password = $_POST['passedit'];

    $edit = "UPDATE tbl_users SET user_Email = '$email', user_Contact = '$contact', user_Password = '$password', user_Fullname = '$name', user_Address = '$address' WHERE user_ID = '$userid'";



 ?>

     <?php
     
 if($conn->query($edit) === TRUE){
 
     ?>
     <script>
      alert("1");
     alert("Sucessfuly Edited Profile");
     </script>
     <?php
     
     header("refresh:0;url=profile.php");
     }else{
         ?>
             <script>
              alert("2");
        alert(<?php echo ''.$conn->error; ?>);
        </script>
         <?php

     }



    }
    ?>
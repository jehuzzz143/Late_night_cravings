<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>


            </head>
            <body>

            
<div class="parent">
<div class="card inline">
<?php       
        $orderid=$_GET['userID'];
            include "db_connection.php";
            $view = "Select * FROM tbl_users WHERE user_ID = '".$orderid."'";
            $result = $conn->query($view);
            while($row=$result->fetch_assoc()){
        ?>
      
<form method = POST action = "performEditUser.php?orderid=<?php echo $orderid ?>">
  <!-- <img src="css/photos/usericon.png" alt="user" style="width:50%"> -->
  <h1>Name</h1>
  <input type = "hidden" id = "userid" name = "userid" value = "<?php echo $row['user_ID']?>">
  <input type="text" id = "nameedit" name = "nameedit" value = "<?php echo $row['user_Fullname']?>"required><br>
  <h1>Contact Number</h1>
  <input type="text" id = "contactedit" name = "contactedit" value = "<?php echo $row['user_Contact']?>"required><br>
  <h1>Address</h1>
  <textarea id = "addressedit" name = "addressedit" required><?php echo $row['user_Address']?></textarea><br>
  <h1>Email</h1>
  <input type="text" id = "emailedit" name = "emailedit" value = "<?php echo $row['user_Email']?>"required><br>
  <h1>Password</h1>
  <input type="text" id = "passedit" name = "passedit" value = "<?php echo $row['user_Password']?>"required><br>
  <div style="margin: 24px 0;"> 
    <!-- <a href="#"><i class="fa fa-facebook"></i></a>  -->
  </div>

  <input type = "submit" name = "subEditUser" value = "Update Information">
  </form>
  <?php }?>
          
</div>

            </body>


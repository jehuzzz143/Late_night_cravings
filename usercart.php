<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LN' Cravings</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/profile.css">

    <!-- fontawSome -->
    
    <script src="https://kit.fontawesome.com/b5369de163.js" crossorigin="anonymous"></script>
    
    <!-- Data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
<!-- Navigation Menu -->
<nav class="navbar" >
    <div class="content container is-full">
      <div class="logo">

        <a href="#" class="change-color">LN's Crazings</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="index.php" class="change-color">Home</a></li>
        <?php
        session_start();
        // Check if the user is logged in
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
          { // This only show for NOT logged in visitors
            header("refresh:0;url=index.php");
          }
          else 
          { 
            ?>
             <li class="dropdown">
               <a class="change-color update-modal">
                 Profile
               </a>
              <div class="dropdown-content">
                <a href="profile.php">My Profile</a>
                <a href="LogoutFunction.php">Log Out</a>
              </div>
            </li>
           <?php
        } 
        ?>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
<br><br><br><br><br><br><br><br>


<div class="card inline" style="padding:3%;">
<?php
            include "db_connection.php";
            $view = "Select * FROM tbl_users WHERE user_ID = '".$_SESSION['ID']."'";
            $result = $conn->query($view);
            while($row=$result->fetch_assoc()){
        ?>
      
       
  <!-- <img src="css/photos/usericon.png" alt="user" style="width:50%"> -->
  <p style="font-size:30px; white-space:nowrap;"><b><?php echo strtoupper($row['user_Fullname']) ?></b></p>
  <p class="title"><?php echo $row['user_Contact']?></p>
  <p class="title"><?php echo $row['user_Address']?></p>
  <div style="margin: 24px 0;"> 
    <!-- <a href="#"><i class="fa fa-facebook"></i></a>  -->
  </div>
  
  <p><button onclick="location.href='editProfile.php?userID=<?php echo $row['user_ID'];?>'">Update Information</button></p>
  <?php }?>
</div>

<!-- table -->
<p class="table-title">My Cart</p>
<table class="styled-table ">
    <thead>
        <tr>
            <th style="width:200px">Product Image</th>
            <th style="width:200px">Product Name</th>
            <th style="width:200px">Product Description</th>
            <th style="width:200px">Product Type</th>
            <th style="width:200px">Quantity</th>
            <th style="width:200px">Total Price</th>
            <th colspan=2 style="text-align:center;">Action</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
                include "db_connection.php";
                $view = "Select * FROM tbl_cart INNER JOIN tbl_products ON tbl_cart.prod_id = tbl_products.ID 
                WHERE cust_id = '".$_SESSION['ID']."'";
                $result = $conn->query($view);
                $rowcount=$result->num_rows;
                while($row=$result->fetch_assoc()){
        ?>
        <tr>
          <form action="usercart.php?prodid=<?php echo $row['ID'] ?>" method="post">
            <td><img height='50px' width='50px' src = 'admin/prod_images/<?php echo $row['prod_image'];?>'></td>
            <td><?php echo $row['prod_name']?></td>
            <td><?php echo $row['prod_desc']?></td>
            <td><?php echo $row['prod_type']?></td>
            <td><input type="number" name="quantity" max="10" min="1" value= <?php echo $row['prod_quant']?>></td>
            <td><?php echo $row['prod_price']*$row['prod_quant'];?></td>
            <td><button style="background-color:; padding:0;"><a class="button-delete"  href="removecartfunction.php?prodid=<?php echo $row['prod_id'];?>">Remove</a></button></td>
            <td><input class="button-update" type="submit" value="update" name="update"></input></td>
          </form>
        </tr>
       
        <?php }?>

        <tr>
          <td colspan="8">
          <?php 
            if($rowcount==0){
            }else{
            ?>
             <a href="checkout.php?custid=<?php echo $_SESSION['ID']?>">
            <button class="button_add">
              CHECKOUT
            </button>
            </a>
            <?php } 
          ?>

          </td>
        </tr>
    </tbody>
   
</table>

</div>
<br><br><br>

<?php

if(isset($_POST['update']))
  {
  $cust_id=$_SESSION['ID'];
  $prodid=$_GET['prodid'];
  $prodquant=$_POST['quantity'];

  $updatecart="UPDATE tbl_cart SET `prod_quant` = '$prodquant' WHERE cust_id = '$cust_id' AND prod_id = '$prodid'";
  $result = $conn->query($updatecart);

    if($result==True){
      
      header("Refresh:0");
      exit;
    }else
    {
      echo ''.$conn->error();
    }
    
  }
      
?>






<!-- DATA AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
    offset:200,
    duration:1000
    });


</script>
</body>
</html>
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
  
 
  <?php }?>
</div>

<!-- table style="width:900px !important;" -->
<p class="table-title" >Checkout</p>
<table class="styled-table" >
    <thead style="width:100%;">
        <tr style="text-align:center;width:100%;">
            <th style="width:200px">Product Image</th>
            <th style="width:200px">Product Name</th>
            <th style="width:200px">Product Type</th>
            <th style="width:200px">Quantity</th>
            <th style="width:200px">Price</th>
            <th style="width:200px">Total Price</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
            include "db_connection.php";
            $cust_id = $_GET['custid'];
            $view = "Select * FROM tbl_cart WHERE cust_id = '".$cust_id."'";
            $result = $conn->query($view);
            while($row=$result->fetch_assoc()){
        ?>
        <tr>
          <form action="usercart.php?prodid=<?php echo $row['ID'] ?>" method="post">
            <td><img  width='80px' src = 'admin/prod_images/<?php echo $row['prod_image'];?>'></td>
            <td><?php echo $row['prod_name']?></td>
            <td><?php echo $row['prod_type']?></td>
            <td><?php echo $row['prod_quant']?></td>
            <td><?php echo $row['prod_price']?></td>
            <td><?php echo $row['prod_price']*$row['prod_quant'];?></td>

          </form>
        </tr>
        <?php }
            $subtotal = "Select SUM(prod_price*prod_quant) as total FROM tbl_cart WHERE cust_id = '".$cust_id."'";
            $result = $conn->query($subtotal);
            $row = mysqli_fetch_array($result);
            $shipping = 40;
            $total_price = $row['total'] + $shipping;
        ?>
        <tr style="background-color:#E7FFE0; border:none;">
          <td colspan="4">--------------------------------------------------------------------------</td>
        
          <td style="border-left: dotted 1px #f00; border-top: dotted 1px #f00; text-align:right;"><b>Subtotal Price:</b></td>
          <td style="border-right: dotted 1px #f00; border-top: dotted 1px #f00;"><?php echo $row['total']; ?></td>
        </tr>
        <tr style="background-color:#E7FFE0; border:none;"> 
        <td colspan="4"></td>
          <td style="border-left: dotted 1px #f00;text-align:right;"> <b>Shipping Fee:</b></td>
          <td style="border-right: dotted 1px #f00;"><?php echo $shipping; ?></td>
        </tr>
        <tr style="background-color:#E7FFE0; border:none;">
        <td colspan="4"></td>
          <td style="border-left: dotted 1px #f00; border-bottom: dotted 1px #f00;text-align:right; white-space: nowrap;"><b>Total Order Price:</b></td>
          <td style="border-right: dotted 1px #f00; border-bottom: dotted 1px #f00;"><?php echo $total_price; ?></td>
        </tr>
        <tr style="background-color:#E7FFE0; border:none;">
          <td colspan="6">
          <a href="PlaceOrder.php?cust_id=<?php echo $_SESSION['ID']?>&subtot=<?php echo $row['total']?>&ship=<?php echo $shipping?>&totprice=<?php echo $total_price?>" >
            <button class="button_add">
                 Place Order 
            </button>
            </a>
          </td>

        </tr>
        
        
    </tbody>
</table>
</div>

<br><br><br>


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
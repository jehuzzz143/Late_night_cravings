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

        <a href="#" class="change-color">LN's Cravings</a>
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
            ?>
             <script>
                    location.href = 'index.php';
            </script>
            <?php
          }
          else 
          { 
            ?>
             <li class="dropdown">
               <a class="change-color update-modal">
                 Profile
               </a>
              <div class="dropdown-content">
                <a href="usercart.php">My Cart</a>
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
<!-- user card -->
<div class="parent" style="">
<div class="card inline" style="padding:3%;">
<?php
            include "db_connection.php";
            $view = "Select * FROM tbl_users WHERE user_ID = '".$_SESSION['ID']."'";
            $result = $conn->query($view);
            while($row=$result->fetch_assoc()){
        ?>
      
       
  <!-- <img src="css/photos/usericon.png" alt="user" style="width:50%"> -->
  <p style="font-size:30px; " ><b><?php echo strtoupper($row['user_Fullname']) ?></b></p>
  <p class="title"><?php echo $row['user_Contact']?></p>
  <p class="title"><?php echo $row['user_Address']?></p>
  <div style="margin: 24px 0;"> 
    <!-- <a href="#"><i class="fa fa-facebook"></i></a>  -->
  </div>
  
  <p><button onclick="location.href='editProfile.php?userID=<?php echo $row['user_ID'];?>'">Update Information</button></p>
  <?php }?>
</div>

<div class="card inline" style="padding:1%;  margin-top:280px; justify-content:justify; border-color:red !important;">

        
    <p > <b style="color:Red"> PAYMENT INSTRUCTION* </b> </p>
    <ul style="">
        
        <li><small style="font-size:11px; float:left;"> <i>Send your payment through Gcash <b> [09279135383] </b> and leave a message with your <b> Order ID </b> shown in your order list table </i></small> </li>
    </ui>
       

  </div>
  
 

</div>

<!-- table-->

<p class="table-title"> My Orders </p>
<table class="styled-table ">
    <thead  style="top:0px; position:sticky;"  >
        <tr>
          <th style="width:200px; text-align:center;">ORDER ID</th>
          <th style="width:200px; text-align:center;">SUBTOTAL</th>
          <th style="width:200px; text-align:center;">SHIPPING FEE</th>
          <th style="width:200px; text-align:center;">TOTAL</th>
          <th style="width:200px; text-align:center;">CUSTOMER_ID</th>
          <th style="width:200px ; text-align:center;">STATUS</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $view = "SELECT * FROM tbl_order WHERE `Cust_ID` = '".$_SESSION['ID']."' ORDER BY `created_At` DESC";
            $result = $conn->query($view);
            $rowcount=$result->num_rows;
            if($rowcount==0){
              ?>
              <tr>
                <td colspan=7> No Orders</td>
              </tr>
              <?php
            }else{
            while($row=$result->fetch_assoc()){
              
        ?>
        <tr>
            <td><a style="text-decoration:underline; color: #459FFF; font-size:16px;" href="../transView.php?orderid=<?php echo $row['Order_ID'];?>" target="_blank"><?php echo $row['Order_ID']?></a></td>
            <td><?php echo $row['Sub_total']?></td>
            <td><?php echo $row['Shipping_fee']?></td>
            <td><?php echo $row['Total_Order_Price']?></td>
            <td><?php echo $row['Cust_ID']?></td>
            <td><?php echo $row['status']?></td>
        </tr>
        <?php }}?>
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
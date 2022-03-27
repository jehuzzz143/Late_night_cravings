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
<!-- user card -->
<div class="parent">
<div class="card inline">
  <img src="css/photos/usericon.png" alt="user" style="width:50%">
  <h1>John Doe</h1>
  <p class="title">+639212765842</p>
  <p>18 eustaquio Street Octagon village Dela Paz Pasig City</p>
  <div style="margin: 24px 0;"> 
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Update Information</button></p>
</div>



<!-- table -->
<p class="table-title">My Cart</p>
<table class="styled-table inline">
    <thead>
        <tr>
          <th>Product Image</th>
          <th>Product Name</th>
          <th>Product Description</th>
          <th>Product Type</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
        <?php
            include "db_connection.php";
            $view = "Select * FROM tbl_cart WHERE cust_id = '".$_SESSION['ID']."'";
            $result = $conn->query($view);
            while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td><img height='50px' width='50px' src = 'admin/prod_images/<?php echo $row['prod_image'];?>'></td>
            <td><?php echo $row['prod_name']?></td>
            <td><?php echo $row['prod_desc']?></td>
            <td><?php echo $row['prod_type']?></td>
            <td>0</td>
            <td>0</td>
            <td><a href="removecartfunction.php?prodid=<?php echo $row['prod_id'];?>">Remove</a></td>
        </tr>
        <?php }?>
        <!-- and so on... -->
    </tbody>
</table>
<p class="table-title">My Orders</p>
<table class="styled-table inline">
    <thead>
        <tr>
            <th>Name</th>
            <th>Points</th>
            <th>Name</th>
            <th>Points</th>
            <th>Name</th>
            <th>Points</th>
            <th>Name</th>
            <th>Points</th>
           
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        <tr class="active-row">
            <td>Melissa</td>
            <td>5150</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>

        </tr>
        
        <!-- and so on... -->
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
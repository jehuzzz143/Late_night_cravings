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
  <p style="font-size:30px; white-space:nowrap;" ><b><?php echo strtoupper($row['user_Fullname']) ?></b></p>
  <p class="title"><?php echo $row['user_Contact']?></p>
  <p class="title"><?php echo $row['user_Address']?></p>
  <div style="margin: 24px 0;"> 
    <!-- <a href="#"><i class="fa fa-facebook"></i></a>  -->
  </div>
  
  <p><button onclick="location.href='editProfile.php?userID=<?php echo $row['user_ID'];?>'">Update Information</button></p>
  <?php }?>
</div>



<!-- table-->

<p class="table-title"> My Orders </p>
<table class="styled-table ">
    <thead  style="top:0px; position:sticky;"  >
        <tr>
            <th style="width:200px">Name</th>
            <th style="width:200px">Points</th>
            <th style="width:200px">Name</th>
            <th style="width:200px">Points</th>
            <th style="width:200px">Name</th>
            <th style="width:200px">Points</th>
            <th style="width:200px">Name</th>
            <th style="width:200px">Points</th>
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
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

    <!-- fontawSome -->
    
    <script src="https://kit.fontawesome.com/b5369de163.js" crossorigin="anonymous"></script>
    
    <!-- Data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<style>
.btn-add{
  display: flex;
  text-align:center;
  padding: 15px;
  background: #009578;
  border: none;
  outline: none;
  border-radius: 5px;
  overflow: hidden;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  color:white;
}
.btn-add:hover {
    background: #008168;
  }
</style>
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
              <li><a href="index.php" class="change-color">Login</a></li>
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
<!-- Navigation Menu -->
 <br><br><br><br>
 <!-- breakfast -->
 <?php 
  include "db_connection.php";
  $view = "Select * from tbl_products WHERE prod_type ='breakfast'";
  $result = $conn->query($view);
  $count = mysqli_num_rows($result);
  if($count == 0){
    ?>
      <center>
        <div class="about">
          <div class="title">No Breakfast Available </div>
        </div>
      </center>
    <?php
  }else{
    ?>
      <center>
        <div class="about">
          <div class="title">BREAKFAST </div>
        </div>
      </center>
    <?php

  }
?>
<div class="container" style="position:relative; padding-bottom:30px;" >
  <div class="columns is-mobile is-multiline is-primary" style="position:relative;">
    <?php
      if($count == 0){
        ?>
          <center>
            <p style="text-align:center;">No Lunch Available for now</p>
          </center>
        <?php
      }else{

        while($row=$result->fetch_assoc()){
          $prodid = $row['ID'];
          $prodname = $row['prod_name'];
          $proddesc = $row['prod_desc'];
          $prodtype = $row['prod_type'];
          $prodimage = $row['prod_image'];
          $prodprice = $row['prod_price'];
          $prodimgpath = "admin/prod_images/".$prodimage
          ?>
            <div class="column is-2 padding-gall" style="position:relative; padding-bottom:30px; padding-top:10px; margin-left:10px;">
              <form action="orderproducts.php?action=add&id=<?php echo $prodid?>" method="post">
                <div class="container zoomInside" >
                  <img class="image-gall zoom" src="<?php echo $prodimgpath ?>" alt="Review Photos">
                </div>
                  <p class="product-name"> <?php echo $prodname ?> </p>
                  <small class="product-description"><?php echo $proddesc ?></small><br>
                  <?php echo "PHP ".$prodprice ?>
                  <?php
                  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
                    // This only show for NOT logged in visitors
                  }
                  else{ 
                    ?>
                      <div class="container" style="text-align:center;">
                        <center>
                          <input type="number" name="quantity" value=1 max=>
                          <input class="btn-add" type="submit" name="addtocart" value="Add to Cart">
                        </center>
                      </div>
                    <?php 
                  }
                    ?>
              </form>
            </div>
          <?php  
        }
      }
    ?>
  </div>
</div>
<?php 
  $view = "Select * from tbl_products WHERE prod_type ='lunch'";
  $result = $conn->query($view);
  $count = mysqli_num_rows($result);
  if($count ==0){
    ?>
      <center>
        <div class="about">
          <div class="title">No Lunch Available </div>
        </div>
      </center>
    <?php
  }else{
    ?>
      <center>
        <div class="about">
          <div class="title">Lunch </div>
        </div>
      </center>
    <?php

  }
?>
<div class="container" style="position:relative; padding-bottom:30px;"  >
  <div class="columns is-mobile is-multiline is-primary" style="position:relative;">
    <?php
      if($count == 0){
        ?>
          <div class="column " style="position:relative; padding-bottom:30px;">
            <hr style="border-top: 1px dashed red;" />
          </div>
        <?php
      }else{
        while($row=$result->fetch_assoc()){
          $prodid = $row['ID'];
          $prodname = $row['prod_name'];
          $proddesc = $row['prod_desc'];
          $prodtype = $row['prod_type'];
          $prodimage = $row['prod_image'];
          $prodimgpath = "admin/prod_images/".$prodimage
          ?>
            <div class="column is-2 padding-gall" style="position:relative; padding-bottom:30px;">
            <form action="orderproducts.php?action=add&id=<?php echo $prodid?>" method="post">
              <div class="container zoomInside" >
                <img class="image-gall zoom" src="<?php echo $prodimgpath ?>" alt="Review Photos">
              </div>
                <p class="product-name"> <?php echo $prodname ?> </p>
                <small class="product-description"><?php echo $proddesc ?></small><br>
                <?php
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
                  // This only show for NOT logged in visitors
                }
                else{ 
                  ?>
                    
                    <div class="container" style="text-align:center;">
                        <center>
                          <input type="number" name="quantity" value=1 max=>
                          <input class="btn-add" type="submit" name="addtocart" value="Add to Cart">
                        </center>
                      </div>
                  <?php 
                }
                  ?>
              </form>
            </div> 
          <?php  
        }

      }
      
    ?>
      
  </div>
</div>
<!-- merienda -->
<?php 
  $view = "Select * from tbl_products WHERE prod_type ='merienda'";
  $result = $conn->query($view);
  $count = mysqli_num_rows($result);
  if($count ==0){
    ?>
      <center>
        <div class="about">
          <div class="title">No Merienda Available </div>
        </div>
      </center>
    <?php
  }else{
    ?>
      <center>
        <div class="about">
          <div class="title">Merienda </div>
        </div>
      </center>
    <?php

  }
?>

<div class="container" style="position:relative; padding-bottom:30px;"  >
  <div class="columns is-mobile is-multiline is-primary" style="position:relative;">
    <?php
      if($count == 0){
        ?>
          <div class="column " style="position:relative; padding-bottom:30px;">
            <hr style="border-top: 1px dashed red;" />
          </div>
        <?php
      }else{
        while($row=$result->fetch_assoc()){
          $prodid = $row['ID'];
          $prodname = $row['prod_name'];
          $proddesc = $row['prod_desc'];
          $prodprice = $row['prod_price'];
          $prodtype = $row['prod_type'];
          $prodimage = $row['prod_image'];
          $prodimgpath = "admin/prod_images/".$prodimage
          ?>
            <div class="column is-2 padding-gall" style="position:relative; padding-bottom:30px;">
            <form action="orderproducts.php?action=add&id=<?php echo $prodid?>" method="post">
              <div class="container zoomInside" >
                <img class="image-gall zoom" src="<?php echo $prodimgpath ?>" alt="Review Photos">
              </div>
                <p class="product-name"> <?php echo $prodname ?> </p>
                <small class="product-description"><?php echo $proddesc ?></small><br>
                <?php echo "PHP ".$prodprice ?>
                <?php
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
                  // This only show for NOT logged in visitors
                }
                else{ 
                  ?>
                    <div class="container" style="text-align:center;">
                        <center>
                          <input type="number" name="quantity" value=1 max=>
                          <input class="btn-add" type="submit" name="addtocart" value="Add to Cart">
                        </center>
                      </div>
                  <?php 
                }
                  ?>
            </form>
            </div> 
          <?php  
        }

      }
      
    ?>
      
  </div>
</div>
<!-- Dinner -->
<?php 
  $view = "Select * from tbl_products WHERE prod_type ='dinner'";
  $result = $conn->query($view);
  $count = mysqli_num_rows($result);
  if($count == 0){
    ?>
      <center>
        <div class="about">
          <div class="title">No Dinner Available </div>
        </div>
      </center>
    <?php
  }else{
    ?>
      <center>
        <div class="about">
          <div class="title">Dinner </div>
        </div>
      </center>
    <?php

  }
?>

<div class="container" style="position:relative; padding-bottom:30px;"  >
  <div class="columns is-mobile is-multiline is-primary" style="position:relative;">
    <?php
      if($count == 0){
        ?>
          <div class="column " style="position:relative; padding-bottom:30px;">
            <hr style="border-top: 1px dashed red;" />
          </div>
        <?php
      }else{
        while($row=$result->fetch_assoc()){
          $prodid = $row['ID'];
          $prodname = $row['prod_name'];
          $proddesc = $row['prod_desc'];
          $prodtype = $row['prod_type'];
          $prodimage = $row['prod_image'];
          $prodimgpath = "admin/prod_images/".$prodimage
          ?>
            <div class="column is-2 padding-gall" style="position:relative; padding-bottom:30px;">
            <form action="orderproducts.php?action=add&id=<?php echo $prodid?>" method="post">
              <div class="container zoomInside" >
                <img class="image-gall zoom" src="<?php echo $prodimgpath ?>" alt="Review Photos">
              </div>
                <p class="product-name"> <?php echo $prodname ?> </p>
                <small class="product-description"><?php echo $proddesc ?></small><br>
                <?php
                if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
                  // This only show for NOT logged in visitors
                }
                else{ 
                  ?>
                    <div class="container" style="text-align:center;">
                        <center>
                          <input type="number" name="quantity" value=1 max=>
                          <input class="btn-add" type="submit" name="addtocart" value="Add to Cart">
                        </center>
                      </div>
                  <?php 
                }
                  ?>
            </form>
              
            </div> 
          <?php  
        }

      }
      
    ?>
      
  </div>
</div>



<?php 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{ // This only show for NOT logged in visitors
  ?>  
    <br><br><br>
    <span style="color:grey"> Please login to allow ordering function </span>
  <?php
}
?>

<?php 
    include ("footer.php");
?>
<?php
if(isset($_POST['addtocart']))
  {
    include "db_connection.php";

    $cust_id=$_SESSION['ID'];
    $prodid=$_GET['id'];
    $quant=$_POST['quantity'];
    $productduplisql = "Select * FROM tbl_cart WHERE prod_id ='$prodid' AND cust_id = '$cust_id'";
    $dupliresult = $conn->query($productduplisql);
    if($dupliresult -> num_rows > 0){
      ?>  
        <script>
        alert("Order already added!");
        </script>
      <?php
      header("refresh:0;url=orderproducts.php");
    }else{
    $insertcart="INSERT INTO `tbl_cart`(`prod_id`, `prod_name`, `prod_desc`, `prod_type`, `prod_image`,`prod_quant`,`cust_id`)
          SELECT `ID`,`prod_name`,`prod_desc`,`prod_type`,`prod_image`,'$quant','$cust_id' FROM tbl_products WHERE ID = '$prodid'";
    $result = $conn->query($insertcart);

      if($result==True){
      ?>  
        <script>
        alert("Sucessfuly Added Product<?php $quant?>");
        </script>
      <?php

        header("refresh:0;url=orderproducts.php");
      }else
      {
        echo ''.$conn->error;
      }
    }
  }
?>
  

  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    var ChangeText = document.getElementsByClassName("change-color");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      navbar.classList.add("show");
      menuBtn.classList.add("hide");
      body.classList.add("disabled");
    }
    cancelBtn.onclick = ()=>{
      body.classList.remove("disabled");
      navbar.classList.remove("show");
      menuBtn.classList.remove("hide");
    }
    window.onscroll = ()=>{
      this.scrollY > 0 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
      if(this.scrollY > 20){
        for(var i=0; i< ChangeText.length; i++){
            ChangeText[i].style.color ="white";
        }
      }else{
        for(var i=0; i< ChangeText.length; i++){
            ChangeText[i].style.color ="black";
        }
      }
    }
  </script>

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
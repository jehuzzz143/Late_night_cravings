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
<center>
  <div class="about">
    <div class="title">OUR MENU </div>
  </div>
</center>
<div class="container" style="margin-bottom:20px;  ">
   
  <div class="columns is-mobile is-multiline">
    

      <?php
              include "db_connection.php";
              $view = "Select * from tbl_products";
              $result = $conn->query($view);
              while($row=$result->fetch_assoc()){
                $prodid = $row['ID'];
                $prodname = $row['prod_name'];
                $proddesc = $row['prod_desc'];
                $prodtype = $row['prod_type'];
                $prodimage = $row['prod_image'];
                $prodimgpath = "admin/prod_images/".$prodimage
                ?>

                  <div class="column is-2 padding-gall" stlye="background-color:red;">
                        <div class="container zoomInside">
                          <img class="image-gall zoom" src="<?php echo $prodimgpath ?>" alt="Review Photos">
                        </div>
                    <div>

                      <div class="columns">
                          <div class="column"><p class="product-name"> <?php echo $prodname ?> </p></div>
                      </div>
                      <small class="product-description"><?php echo $proddesc ?></small>
                      <br>
                      <?php
                      if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
                      { // This only show for NOT logged in visitors
                        
                      }
                      else 
                      { 
                      ?>
                      <button><a href="addtocartfunction.php?action=add&prodid=<?php echo $prodid;?>">Add to cart</a></button>
                      <?php }?>
                  </div>
                </div> 
                <?php  
            }
        ?>
      
  </div>
</div>


<!-- special service -->



<!-- PARALLAX 2 -->
<!-- <div class="container is-fluid" id="parallax-2">
    <div class="container">
      <center>
        <p class="text-slogan2">ORDER NOW</p>
    
        
      </center>
    </div>
  </div> -->
<!-- END PARALLAX 2 -->

<!-- FOOTER -->
<?php 
    include ("footer.php");
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
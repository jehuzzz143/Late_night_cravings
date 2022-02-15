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
</head>
<body>
<!-- Navigation Menu -->
<?php 
  include ("nav.php");
?>
  <!-- Paralax -->
  <div class="banner" style="background-color:red;" id="home">
    <div class="container-fluid " style="padding:0;">
    <div class="parallax">
        <div class="container">
        <center>
            <p class="text-slogan" data-aos="fade-up" >YOU DON'T NEED TO SLEEP EARLY</p> 
           
           
        </center>
        </div>
        <div id="loginView">  </div>
    </div>
    </div>
  </div>
 
  
    <!-- 3d slider -->
    <!-- <center>
    <div class="d-slider">
        <span style="--i:1;"><img src="css/photos/f1.jfif"></span>
        <span style="--i:2;"><img src="css/photos/f2.jfif"></span>
        <span style="--i:3;"><img src="css/photos/f3.jfif"></span>
        <span style="--i:4;"><img src="css/photos/f4.jfif"></span>
        <span style="--i:5;"><img src="css/photos/f5.jfif"></span>
        <span style="--i:6;"><img src="css/photos/f6.jfif"></span>
   
  
    </div>
    </center> -->
    <br><br>
<!-- Login Form -->
  <?php 
    include("login.php");
  ?>
<!-- about -->
  <div class="container" style="padding:0;">
    <div class="about" id="about" style="padding:0px;">
      <div class="container" >
        <div class="title">Background History </div>
        <p>We started out as karinderya we transitioned to "Late Night Cravings" to cope with the new normal. We sleep in the Morning, attend classes in the Afternoon and we cook and deliver foods during night time. Our main customer target are those who are looking for specific food when all other restaurants are either closed or unavailable for delivery.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit hic excepturi nobis id, eos dolor libero, nam assumenda, at culpa quos perspiciatis ratione ea modi! Natus sapiente a, explicabo sit quisquam eligendi esse provident eos enim doloremque blanditiis aut placeat veniam, libero nostrum quae. Ipsam, iste reprehenderit minima accusantium illo dolorem recusandae, ipsa autem quidem reiciendis a mollitia sit tenetur.</p>
        </div>
        <div id="menu" style="opacity:0; margin-top;-100px;">  </div>
    </div>
  </div>
  <br><br>
<!-- products -->
<?php 
    include ("products.php");
?>

<!-- PARALLAX 2 -->
<div class="container is-fluid" id="parallax-2">
    <div class="container">
      <center>
        <p class="text-slogan2" data-aos="fade-up">ORDER NOW</p>
    
        
      </center>
    </div>
  </div>
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
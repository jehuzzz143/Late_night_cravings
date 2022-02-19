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

<div class="container" id="text-w" style="margin-top:60px;margin-bottom:60px;padding-right:0;padding-left:0;"  data-aos="fade-up">

  <div class="title">Where are we located? </div>

  <div class="map-responsive ">
  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3861.231110933342!2d121.17256990015356!3d14.585902631297714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397bf53fd15d2b1%3A0xa23619ce8136cfc6!2sAntipolo%20Cathedral%2C%20Dela%20Paz%20Street%2C%20Antipolo%2C%20Rizal!3m2!1d14.587638!2d121.17665649999999!4m5!1s0x3397bf550eb946f5%3A0x5cac1adffaaefc07!2sGeneral%20Luna%20St%2C%20Antipolo%2C%201870%20Rizal!3m2!1d14.5854184!2d121.17301169999999!5e0!3m2!1sen!2sph!4v1645088221664!5m2!1sen!2sph" 
  width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
</div>
</div>
<div class="container">

</div>

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
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Navigation Bar | CodingNepal</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar" >
    <div class="content container is-full">
      <div class="logo">
        <a href="#" class="change-color">LN's Crazings</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#" class="change-color">Home</a></li>
        <li><a href="#" class="change-color">About</a></li>
        <li><a href="#" class="change-color">Services</a></li>
        <li><a href="#" class="change-color">Features</a></li>
        <li><a href="#" class="change-color">Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <!-- Paralax -->
  <div class="banner" style="background-color:red;">
    <div class="container-fluid " style="padding:0;">
    <div class="parallax">
        <div class="container">
        <center>
            <p class="text-slogan" data-aos="fade-up">PANCIT CANTON</p> 
           
        </center>
        </div>
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
<!-- about -->
  <div class="about">
    <div class="content">
      <div class="title">About About About ABout About About aBout About</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo impedit atque consequatur! Iusto distinctio temporibus repellendus labore odit adipisci harum ipsa beatae natus, eum eius, hic aperiam odio! Quasi molestias magnam illo voluptatem iusto ipsam blanditiis, tempore cumque reiciendis quaerat vero tenetur, sequi dolores libero voluptas vitae voluptate placeat dolorum modi ipsa nisi repellat facilis aliquam asperiores. Aut nam repellat harum quas saepe dolorum voluptates ratione, itaque consectetur explicabo a facilis rem mollitia maxime repudiandae fuga reprehenderit, odio cum incidunt labore molestiae quis non perferendis ipsam. Illum, in, deserunt. Ipsa.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit hic excepturi nobis id, eos dolor libero, nam assumenda, at culpa quos perspiciatis ratione ea modi! Natus sapiente a, explicabo sit quisquam eligendi esse provident eos enim doloremque blanditiis aut placeat veniam, libero nostrum quae. Ipsam, iste reprehenderit minima accusantium illo dolorem recusandae, ipsa autem quidem reiciendis a mollitia sit tenetur.</p>
      </div>
  </div>
<!-- products -->
<?php 
    include ("products.php");
?>
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
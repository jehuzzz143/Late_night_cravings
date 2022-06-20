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
  <div class="container  login-container" id="login"  style="display:none;">
        
        <p class="login-close" onClick="loginClose()"><ion-icon name="close-outline"></ion-icon></p>
        <p class="title">Login is required before purchasing </p>

        <div class="columns">
            <div class="column">
            <form method='POST' action="">
                <label for="User-First_Name">Email:</label>
                <input type="text" name="User-Email_Address">
                <label for="User-First_Name">Password:</label>
                <input type="password" name="User-Password">
                <input class="loginbtn" type="Submit" name="BtnLogin" value="Sign In"></input>

                <p style="color:black;"> Don't have Account yet? <a id="myBtn" class="signup"  onClick="signup()"> Sign up here.</a></p>
                
            </form>
            </div>
            <div class="column" id="signup" style="display:none;margin-top:-60px;">
                <p class="login-close" onClick="signupclose()"><ion-icon name="close-outline"></ion-icon></i></p>
                <?php 
                    include("UserSignup.php");
                ?>
            </div>
            <div class="column" id="login_Picture" style="margin-top:-60px;">
                <center>
                <img class="login-photo" src="css/photos/pic.png" alt="food picture">
                </center>
            </div>
        </div>
    </div>

    <script>
        function login() {
            
            document.getElementById("login").classList.add("unhide");
            document.getElementById("login").classList.remove("hide");
        }
        function loginClose(){
            document.getElementById("login").classList.remove("unhide");
            document.getElementById("login").classList.add("hide");
        }
        function signup(){
            document.getElementById("signup").classList.add("unhide");
            document.getElementById("login").classList.remove("hide");
            document.getElementById("login_Picture").classList.add("hide");
            document.getElementById("login_Picture").classList.remove("unhide");
          
        }
        function signupclose(){
            document.getElementById("signup").classList.remove("unhide");
            document.getElementById("login").classList.add("hide");
            document.getElementById("login_Picture").classList.add("unhide");
            document.getElementById("login_Picture").classList.remove("hide");
        }
    </script>
<!-- about -->
  <div class="container" style="padding:0; padding-bottom:50px;">
    <div class="about" id="about" style="padding:0px;">
      <div class="container" >
        <div class="title">Background History </div>
        <p style="padding-bottom:20px;">We started out as karinderya we transitioned to "Late Night Cravings" to cope with the new normal. We sleep in the Morning, attend classes in the Afternoon and we cook and deliver foods during night time. Our main customer target are those who are looking for specific food when all other restaurants are either closed or unavailable for delivery.</p>
       
        </div>
        <div id="menu" style="opacity:0; margin-top:-100px;">  </div>
      </div>
  </div>
  <br><br>
<!-- products -->
<?php 
    include ("products.php");
?>


<div class="container">
  <center>
    <div class="title" style=" padding:10px;">SPECIAL CATERING SERVICE </div>
    
  </center>
  <div class="columns">
    <div class="column">
      <div class="container zoomInside">
        <img class="image-gall zoom" src="https://images.unsplash.com/photo-1555244162-803834f70033?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Review Photos">
        <p class="text-float">Birthdays</p>
      </div>
    </div>
    <div class="column">
      <div class="container zoomInside">
        <img class="image-gall zoom" src="https://images.unsplash.com/photo-1575613583747-6b51b5452301?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Review Photos">
        <p class="text-float">Special Events</p>
      </div>
    </div>
    <div class="column">
      <div class="container zoomInside">
        <img class="image-gall zoom" src="https://images.unsplash.com/photo-1613067532415-90df85362423?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" alt="Review Photos">
        <p class="text-float">Wedding</p>
      </div>
    </div>
   
  </div>
  <div class="columns" style=" padding:10px;">
 
    <div class="column" style="background-color: gainsboro;">
    <b>NOTES</b>
      <ul style="list-style-type: circle; padding-left:15px;">
        <li>
          <p>For catering service please contact our number directly</p>
        </li>
        <li>
          <p> customer must book our services 3 or 5 days ahead of time</p>
        </li>
        <li>
          <p> Last minute bookings will automatically be declined</p>
        </li>
      </ul>
    </div>
    <div class="column" style="background-color:gainsboro; padding-top:33px;">
      
      <div> <b>READY THE FOLLOWING INFO</b> :  Venue/Place, Theme of the event and time.</div>
      <div> <b>GLOBE</b> : 09279135383 and look for miss janica for the catering booking. </div>
      <div> <b>25%</b> :  downpayment is required. </div>
    </div>
  </div>
  


</div>

<div class="container" id="text-w" style="margin-top:60px;margin-bottom:60px;padding-right:0;padding-left:0;"  >

  <div class="title">Where are we located? </div>

  <div class="map-responsive ">
  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3861.231110933342!2d121.17256990015356!3d14.585902631297714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397bf53fd15d2b1%3A0xa23619ce8136cfc6!2sAntipolo%20Cathedral%2C%20Dela%20Paz%20Street%2C%20Antipolo%2C%20Rizal!3m2!1d14.587638!2d121.17665649999999!4m5!1s0x3397bf550eb946f5%3A0x5cac1adffaaefc07!2sGeneral%20Luna%20St%2C%20Antipolo%2C%201870%20Rizal!3m2!1d14.5854184!2d121.17301169999999!5e0!3m2!1sen!2sph!4v1645088221664!5m2!1sen!2sph" 
  width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  
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
<?php
include 'db_connection.php';


    if(isset($_POST['BtnLogin']))
    {
        $Email = $_POST['User-Email_Address'];
        $Password = $_POST['User-Password'];

        $CredChk = "SELECT * FROM tbl_users WHERE user_Email = '$Email' AND user_Password = '$Password'";
        $Credresult = $conn->query($CredChk);
        $Credresult -> num_rows;
        if($Credresult -> num_rows > 0)
        {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["usertype"] = "admin";
            
            $row = mysqli_fetch_array($Credresult);
            if($row['user_Email']=="admin"){
                $sqlLog = "INSERT INTO tbl_logs (log_Description, log_Time) VALUES('Admin Login', NOW())";
                $result2 = $conn->query($sqlLog);
            ?>
                <script>
                    alert ("Hello Admin");
                    location.href = 'admin/dashboard.php';
                </script>
            <?php
                
            }
            else{   
                $_SESSION['ID'] = $row['user_ID'];
                $_SESSION['Fullname'] = $row['user_Fullname'];
                $_SESSION["loggedin"] = true;
                ?>
                <script>
                   alert ("Hello <?php echo $_SESSION['Fullname'] ?>");
                   location.href = '';
                </script>
                <?php
            }
        
        }
        else
        {
            ?>
                <script>
                    alert ("Email or Password is Incorrect!");
                </script>
            <?php
            
        }

    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- css -->
    <!-- <link rel="stylesheet" href="css/login.css"> -->

</head>
<body>
    <!-- Navigation Menu -->
    <!-- <?php 
        include ("nav.php");
    ?>
    <br><br><br><br> <br><br> -->

    <!-- Login Form -->

    <div class="container  login-container" id="login" style="border:1px;" style="display:none;">
        
        <p class="login-close" onClick="loginClose()"><i class="fa-duotone fa-circle-xmark"></i></p>
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
                <p class="login-close" onClick="signupclose()"><i class="fa-duotone fa-circle-xmark"></i></p>
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
</body> 
</html>

<?php 
    include 'LoginFunction.php';
?>
    
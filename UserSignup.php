<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
<p class="title">Sign Up Form</p>
    <form method='POST' action="">
    <label for="User-First_Name">First name:</label>
    <input type="text" name="User-First_Name" required><br>
    <label for="User-Last_Name">Last name:</label>
    <input type="text" name="User-Last_Name" required><br>

    <label for="User-Email_Address">Email Address:</label>
    <input type="text" name="User-Email_Address" required><br>

    <label for="User-Birthdate">Birthday:</label>
    <input type="date" name="User-Birthdate" ><br>

    <label for="User-Address">Complete Address:</label>
    <input type="text" name="User-Address" required><br>

    <label for="User-Contact">Contact Number:</label>
    <input type="text" name="User-Contact" required><br>
   
    <label for="User-Password">Password:</label>
    <input type="password" name="User-Password" required><br>

    <label for="User-Confirm_Password">Confirm Password:</label>
    <input type="password" name="User-Confirm_Password" required><br>
    <input class="loginbtn" type="Submit" name="BtnSignup" value="Sign Up"></input>
    </form>
</body> 
</html>

<?php
    include 'UserSignupFunction.php';
?>
    
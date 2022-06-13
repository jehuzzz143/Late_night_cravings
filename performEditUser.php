<?php
include "db_connection.php";
if(isset($_POST['subEditUser']))
{
    $userid=$_GET['orderid'];
    $name = $_POST['nameedit'];
    $contact = $_POST['contactedit'];
    $address = $_POST['addressedit'];
    $email = $_POST['emailedit'];
    $password = $_POST['passedit'];
    $userid = $_POST['userid'];
    
    $edit = "UPDATE tbl_Users
    SET user_Email = '$email',
    user_Password = '$password',
    user_Fullname = '$name',
    user_Address = '$address'
    WHERE user_ID = '$userid'";


 $result1 = $conn->query($edit);
 
 if($result1==True){
 
     ?>
     <script>
     alert("Sucessfuly Edited Profile");
     </script>
     <?php
     
     header("refresh:0;url=profile.php");
     }



    }
    ?>
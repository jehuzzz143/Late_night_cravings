<?php
include 'db_connection.php';
// $conn = OpenCon();
        //Birthday Age Calculator 
    if(isset($_POST['BtnSignup'])){

        $UserId = RandomID();
        $UserFullname = $_POST['User-First_Name']." ".$_POST['User-Last_Name'];       
        $UserEmail = $_POST['User-Email_Address'];
        $Userbday = $_POST['User-Birthdate'];
        $Userage = birthdayage($Userbday);
        $UserAddrs = $_POST['User-Address'];
        $UserContact = $_POST['User-Contact'];
        $UserPassword = $_POST['User-Password'];
        $UserConfirmPassword = $_POST['User-Confirm_Password'];
        $Passwordcheck = ConfirmPassword($UserPassword,$UserConfirmPassword);
        if ($Passwordcheck == 1){
            echo $UserId;
        }else{
            ?>
                <script>
                    alert ("Passwords do not match.");
                </script>
            <?php
        }
        

        $InsertUserInfo = "INSERT INTO `tbl_users`(`user_ID`, `user_Email`, `user_Password`, `user_Fullname`, `user_Birthday`, `user_Age`, `user_Address`,`user_Contact`,`user_DateCreated`,`user_Status`) 
        VALUES ('$UserId','$UserEmail','$UserPassword','$UserFullname','$Userbday','$Userage','$UserAddrs', '$UserContact',NOW(),1)";
        if($conn->query($InsertUserInfo)==TRUE){
            ?>
                <script>
                    alert ("Record Added!");
                </script>
            <?php
            $sqlLog = "INSERT into tbl_logs (log_Description, log_Time) VALUES('User Sign-up', NOW())";
            $result2 = $conn->query($sqlLog);
        }else{
            ?>
                <script>
                    alert ("Error ".$conn->error);
                </script>
            <?php
        }

    }

    function birthdayage($bday){
        $today = date('Y-m-d');
        $diff = date_diff(date_create($bday), date_create($today));   
        $age = $diff->format('%y');
        return $age;
    }
    
    function ConfirmPassword($Password,$CurrentPassword){

        if($Password!=$CurrentPassword){
            return false;
        }
        else{
            return true;
        }
    }

    function RandomID(){
        $bytes = random_bytes(4);
        $usr = "USER".bin2hex($bytes);
        return $usr;
    }
    

?>
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
            $row = mysqli_fetch_array($Credresult);
            if($row['user_Email']=="admin"){
            ?>
                <script>
                    alert ("Hello Admin");
                    location.href = 'admin/';
                </script>
            <?php
            CloseCon($conn);
            }
            else{
                session_start();
                
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
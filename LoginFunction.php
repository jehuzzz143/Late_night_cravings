<?php
include 'db_connection.php';


    if(isset($_POST['BtnLogin']))
    {
        $Email = $_POST['User-Email_Address'];
        $Password = $_POST['User-Password'];

        $CredChk = "SELECT * FROM tbl_users WHERE user_Email = '$Email' AND user_Password = '$Password'";
        $Credresult = $conn->query($CredChk);
        echo "zz".$Credresult -> num_rows;
        if($Credresult -> num_rows > 0)
        {
            ?>
                <script>
                    alert ("Hello Admin");
                    location.href = 'admin/';
                </script>
            <?php
            CloseCon($conn);
        }
        else
        {
            ?>
                <script>
                    alert ("Email or Password is Incorrect!");
                </script>
            <?php
            CloseCon($conn);
        }

    }

?>
<?php
include 'db_connection.php';
$conn = OpenCon();


    if(isset($_POST['BtnLogin']))
    {
        $Email = $_POST['User-Email_Address'];
        $Password = $_POST['User-Password'];

        $CredChk = "SELECT * FROM tbl_users WHERE str_Email = '$Email' AND str_Password = '$Password'";
        $Credresult = $conn->query($CredChk);

        if($Credresult -> num_rows > 0)
        {
            ?>
                <script>
                    alert ("Hello Admin");
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
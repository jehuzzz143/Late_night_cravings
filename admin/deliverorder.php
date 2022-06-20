<?php
include "../db_connection.php";

    
    $orderid=$_GET['orderid'];
 
    $status = "Delivered";
    $sqlEditOrder = "UPDATE tbl_order SET status = '$status' WHERE Order_ID = '$orderid'";
    $result1 = $conn->query($sqlEditOrder);
    if($result1==True){
        $sqlLog = "INSERT into tbl_logs (log_Description, log_Time) VALUES('Delivered Order', NOW())";
    $result2 = $conn->query($sqlLog);
    
        ?>
        <script>
        alert("Sucessfuly Delivered Order");
        </script>
        <?php
        
        header("refresh:0;url=dashboard.php");
        }





?>
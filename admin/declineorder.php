<?php
include "../db_connection.php";

	
    $orderid=$_GET['orderid'];
 
    $status = "Declined";
    $sqlEditOrder = "UPDATE tbl_order SET status = '$status' WHERE Order_ID = '$orderid'";
    $result1 = $conn->query($sqlEditOrder);
    $sqlLog = "INSERT into tbl_logs (log_Description, log_Time) VALUES('Declined Order', NOW())";
    $result2 = $conn->query($sqlLog);
    if($result1==True){
	
        ?>
        <script>
        alert("Sucessfuly Declined Order");
        </script>
        <?php
        
        header("refresh:0;url=dashboard.php");
        }





?>
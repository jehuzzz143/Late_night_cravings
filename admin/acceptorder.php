<?php
include "../db_connection.php";

	
    $orderid=$_GET['orderid'];
 
    $status = "Accepted";
    $sqlEditOrder = "UPDATE tbl_order SET status = '$status' WHERE Order_ID = '$orderid'";
    $result1 = $conn->query($sqlEditOrder);
    if($result1==True){
	
        ?>
        <script>
        alert("Sucessfuly Accepted Order");
        </script>
        <?php
        
        header("refresh:0;url=dashboard.php");
        }





?>
<?php
include "../db_connection.php";
if(isset($_POST['deleteProd'])){
    
    
    $prodid = $_POST['prodidedit1'];
  
    

    $sqlDelete = "DELETE FROM tbl_products WHERE ID = '$prodid'";

    $result1 = $conn->query($sqlDelete);
    if($result1==True){
        $sqlLog = "INSERT into tbl_logs (log_Description, log_Time) VALUES('Deleted Product', NOW())";
    $result2 = $conn->query($sqlLog);
    
        ?>
        <script>
        alert("Sucessfuly Deleted Product");
        </script>
        <?php
        
        header("refresh:0;url=product.php");
        }



}

?>
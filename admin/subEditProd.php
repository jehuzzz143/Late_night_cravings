<?php
include "../db_connection.php";
if(isset($_POST['subEditProd'])){
	
    $prodtype = $_POST['prodtypeedit']; 
    $prodid = $_POST['prodidedit'];
    $prodname = $_POST['prodnameedit'];
	$proddesc = $_POST['proddescedit'];
	

    $sqlEditProd = "UPDATE tbl_products
    SET prod_name = '$prodname',
    prod_desc = '$proddesc',
    prod_type = '$prodtype'
    WHERE ID = '$prodid'";

    $result1 = $conn->query($sqlEditProd);
    if($result1==True){
	
        ?>
        <script>
        alert("Sucessfuly Edited Product");
        </script>
        <?php
        
        header("refresh:0;url=product.php");
        }



}

?>
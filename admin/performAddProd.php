
<?PHP
include "../db_connection.php";
if(isset($_POST['subAddProd'])){
	
	$prodname = $_POST['prodname'];
	$proddesc = $_POST['proddesc'];
	$prodtype = $_POST['prodtype'];
	


$sqlAddProd = "INSERT INTO tbl_products(prod_name, prod_desc, prod_type)
VALUES('$prodname', '$proddesc', '$prodtype')";

$result1 = $conn->query($sqlAddProd);

if($result1==True){
	
?>
<script>
alert("Sucessfuly Added Product");
</script>
<?php

header("refresh:0;url=product.php");
}
}

?>

<?PHP
include "../db_connection.php";
if(isset($_POST['subAddProd'])){
	
	$prodname = $_POST['prodname'];
	$proddesc = $_POST['proddesc'];
	$prodtype = $_POST['prodtype']; 
    $target = "prod_images/".basename($_FILES['file']['name']);
	$image = $_FILES['file']['name'];

$sqlAddProd = "INSERT INTO tbl_products(prod_name, prod_desc, prod_type, prod_image)
VALUES('$prodname', '$proddesc', '$prodtype', '$image')";

$result1 = $conn->query($sqlAddProd);

if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
	$msg="Image uploaded";
}
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
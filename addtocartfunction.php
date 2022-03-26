<?php
session_start();
include "db_connection.php";

  $cust_id=$_SESSION['ID'];
  $prodid=$_GET['prodid'];
  $productduplisql = "Select * FROM tbl_cart WHERE prod_id ='$prodid' AND cust_id = '$cust_id'";
  $dupliresult = $conn->query($productduplisql);
    if($dupliresult -> num_rows > 0){
      ?>  
        <script>
        alert("Order already added!");
        </script>
      <?php
      header("refresh:0;url=orderproducts.php");
    }else{
    $insertcart="INSERT INTO `tbl_cart`(`prod_id`, `prod_name`, `prod_desc`, `prod_type`, `prod_image`, `cust_id`)
          SELECT `ID`,`prod_name`,`prod_desc`,`prod_type`,`prod_image`,'$cust_id' FROM tbl_products WHERE ID = '$prodid'";
    $result = $conn->query($insertcart);

      if($result==True){
      ?>  
        <script>
        alert("Sucessfuly Added Product");
        </script>
      <?php

        header("refresh:0;url=orderproducts.php");
      }else
      {
        echo ''.$conn->error;
      }
    }
  
      
?>
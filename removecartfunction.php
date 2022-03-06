<?php
session_start();
include "db_connection.php";

  $cust_id=$_SESSION['ID'];
  $prodid=$_GET['prodid'];
 
    $deletecart="DELETE FROM tbl_cart WHERE cust_id='$cust_id' AND prod_id='$prodid'";
    $result = $conn->query($deletecart);

      if($result==True){
      ?>  
        <script>
        alert("Product Deleted");
        </script>
      <?php

        header("refresh:0;url=usercart.php");
      }else
      {
        echo ''.$conn->error();
      }
    
  
      
?>
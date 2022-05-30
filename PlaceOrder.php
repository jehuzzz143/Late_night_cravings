<?php
include "db_connection.php";

    $cust_id=$_GET['cust_id'];
    $subtot=$_GET['subtot'];
    $ship=$_GET['ship'];
    $totprice=$_GET['totprice'];
    $OrderId = RandomOrderID();

    $insertorder="INSERT INTO `tbl_order`(`Order_ID`, `Sub_total`, `Shipping_fee`, `Total_Order_Price`, `Cust_ID`) 
    VALUES ('$OrderId','$subtot','$ship','$totprice','$cust_id')";
    $result = $conn->query($insertorder);

      if($result==True){
        $selectcart = "Select * FROM tbl_cart WHERE cust_id = '".$cust_id."'";
        $resultcart = $conn->query($selectcart);
        $rowcount=$resultcart->num_rows;
        $count=0;
        while($row=$resultcart->fetch_assoc()){
          $id=$row['prod_id'];
          $quantity=$row['prod_quant'];
          $insertorderprod="INSERT INTO `tbl_order_products`(`Prod_ID`, `Prod_Quant`, `Prod_Price`, `Prod_Total_Price`, `Cust_ID`, `Order_ID`) 
          VALUES ('$id','$quantity','0','0','$cust_id','$OrderId')";
          $resultprod = $conn->query($insertorderprod);

          $count=$count+1;
          if($count==$rowcount){
            $deletecart="DELETE FROM `tbl_cart` WHERE cust_id='$cust_id'";
            $resultdelete = $conn->query($deletecart);
          }
        }
        

          ?>  
              <script>
                  alert("Order Placed!");
              </script>
          <?php


        header("refresh:0;url=index.php");
      }else
      {
        echo ''.$conn->error();
      }
    
    function RandomOrderID(){
        $bytes = random_bytes(4);
        $usr = "ORDR".bin2hex($bytes);
        return $usr;
    }
  
?>
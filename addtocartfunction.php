<?php

      if(isset($POST['addtocart'])){
      $prod_quant=$_POST['prod_quant'];
      ?>
            <script>
                alert(<?php echo $_POST['prodid']?>);
            </script>
      <?php
      $cust_id=$_SESSION['ID'];
      $prodid=$_POST['prodid'];
      $productduplisql = "Select * FROM tbl_cart WHERE prod_id ='$prodid' AND cust_id = '$cust_id'";
      $dupliresult = $conn->query($productduplisql);
      #if($dupliresult -> num_rows > 0){

      #}else{
        $insertcart="INSERT INTO `tbl_cart`(`prod_id`, `prod_name`, `prod_desc`, `prod_type`, `prod_image`,`prod_quant`,`cust_id`)
              SELECT `ID`,`prod_name`,`prod_desc`,`prod_type`,`prod_image`,'$prod_quant','$cust_id' FROM tbl_products WHERE ID = '$prodid'";
        if(empty($prod_quant)){
          ?>
            <script>
                alert("Put Quantity");
            </script>
          <?php
        }else{
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
            echo ''.$conn->error();
          }
        }
      #}
      }
        
      
?>
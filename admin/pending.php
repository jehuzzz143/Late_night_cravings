<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/index.css">
    
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/pending.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
    <!-- Buttons Js -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
    <!-- navigation -->
    <?php   include ("navigation-temp.php") ?>

    <section class="home">
        <div class="text">ORDERS</div>
      
        <div>
        <table style="overflow-y:scroll; display:block; height:550px !important; margin-top:100px;">
            <tr style="position:sticky; top:0;">
                <th style="width:200px; white-space: nowrap;">ORDER ID</th>
                <th style="width:200px; white-space: nowrap;">CUSTOMER ID</th>
                <th style="width:200px; white-space: nowrap;">SUBTOTAL</th>
                <th style="width:200px; white-space: nowrap;">SHIPPING FEE</th>
                <th style="width:200px; white-space: nowrap;">TOTAL</th>
                <th style="width:200px" colspan="2">Status</th>
            
            </tr>
            <tr>
            <?php
            include "../db_connection.php";
            $view = "SELECT * FROM tbl_order WHERE status = 'Delivered' ORDER BY status";
            $result = $conn->query($view);
            $rowcount=$result->num_rows;
            if($rowcount==0){
                ?>
                <tr>
                  <td colspan=7 style="text-align:center;width:100%;"> No Ongoing Orders</td>
                </tr>
                <?php
              }else{
            while($row=$result->fetch_assoc()){
        ?>
        <tr>
        <form action="acceptorder.php?orderid=<?php echo $row['Order_ID'] ?>" method="post">
            <td><a  target="_blank" href="../transView.php?orderid=<?php echo $row['Order_ID'];?>"><?php echo $row['Order_ID']?></td>
            <td><?php echo $row['Sub_total']?></td>
            <td><?php echo $row['Shipping_fee']?></td>
            <td><?php echo $row['Total_Order_Price']?></td>
            <td><?php echo $row['Cust_ID']?></td>
            <td><?php echo $row['status']?></td>
            </form>
        </tr>
        <?php }}?>
            
            </table>
        </div>
        
        
    </section>
    

    <!-- Add Product Modal -->
    <div class="popup">
    <header>
      <span>New Food</span>
      <div class="close"><ion-icon name="close-circle-outline"></ion-icon></div>
    </header>
    <div class="content">
     
      <div class="field">
        <button class="button-save">Save <ion-icon name="save-outline"></ion-icon></button>
        <button class="button-cancel">Cancel</button>
      </div>
      
    </div>
  </div>
 






</body>
</html>
<?php


?>
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
    <link rel="stylesheet" href="css/dashboard.css">

    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <!-- navigation -->
    <?php   
    include ("navigation-temp.php");
    include "../db_connection.php";
    $view = "SELECT SUM(status = 'PENDING') as pending, count(*) as total_orders, SUM(status = 'Delivered') as complete FROM `tbl_order` WHERE 1";
            $result = $conn->query($view);
            while($row=$result->fetch_assoc()){
    ?>

    <section class="home">
        <div class="text">Dashboard </div>
    <center>
        <div class="container">
            <div class="columns">
                <div class="column parent">
                    <p class="p">TOTAL ORDER</p>
                    <p class="bold"><?php echo $row['total_orders']; ?></p>
                </div>
                <div class="column parent">
                    <p class="p">PENDING ORDER</p>
                    <p class="bold"><?php echo $row['pending']; ?></p>
                </div>
                <div class="column parent">
                    <p class="p">COMPLETE TRANSACTION</p>
                    <p class="bold"><?php echo $row['complete']; ?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </center>
    <div class="container" style="margin-top:40px;">
        <p class="label text">ON GOING ORDERS</p>
        <div class="columns">
            <div class="column" >
                <table style="overflow-y:scroll; display:block; height:450px !important;" >
                    <tr style="position:sticky; top:0;">
                        <th style="width:200px">ORDER ID</th>
                        <th style="width:200px">SUBTOTAL</th>
                        <th style="width:200px">SHIPPING FEE</th>
                        <th style="width:200px">TOTAL</th>
                        <th style="width:200px">CUSTOMER_ID</th>
                        <th style="width:200px">STATUS</th>
                        <th style="width:200px; text-align:center;" colspan="3">ACTION</th>
                    
                    </tr>
                    <tr>
                    <?php
            $view = "SELECT * FROM tbl_order WHERE (STATUS = 'Accepted') OR (status = 'Declined') or (STATUS ='PENDING') ORDER BY status";
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
            <td><?php echo $row['Order_ID']?></td>
            <td><?php echo $row['Sub_total']?></td>
            <td><?php echo $row['Shipping_fee']?></td>
            <td><?php echo $row['Total_Order_Price']?></td>
            <td><?php echo $row['Cust_ID']?></td>
            <td><?php echo $row['status']?></td>
            <td>
            <a href="acceptorder.php?orderid=<?php echo $row['Order_ID'];?>">Accept</a>
            </td>
            <td>
            <a href="declineorder.php?orderid=<?php echo $row['Order_ID'];?>">Decline</a>
            </td>
            <td>
            <a href="deliverorder.php?orderid=<?php echo $row['Order_ID'];?>">Deliver</a></td>
            </form>
        </tr>
        <?php }}?>
                </table>
            </div>
            <!-- <div class="column is-3" style="z-idex:20">
                <div class="sale">
                    <p>$500</p>
                </div>
            </div> -->
        </div>
    </div>
    

    </section>






</body>
</html>
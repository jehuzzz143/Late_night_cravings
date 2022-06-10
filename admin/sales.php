<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/pending.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!----===== Icons ===== -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <!-- navigation -->
    <?php   include ("navigation-temp.php") ?>

    <section class="home">
        <div class="text">Company Sales</div>
        <br>
        <center>
            <div class="container">
                <div class="columns">
                <form method="post" action="sales.php">
                        <div class="column ">
                            <p class="">Starting</p>
                            <input type="date"  name="start"  value="" required>
                            
                        </div>
                        <div class="column ">
                            <p class="">Ending</p>
                            <input type="date"  name="end"  value="" required>
                        
                        </div>
                        <div class="column ">
                            <button type="submit" name="submit" class="button_add"><span class="button__text">Generate Sale</span>
                                <span class="button__icon">
                                    <ion-icon name="disc-outline"></ion-icon>
                                </span>
                            </button>
                        
                        </div>
                    </form>
                </div>
            </div>
        </center>


        <div >
            
            <table style="margin-left:30px;">
                <tr>
                    <th>ORDER ID</th>
                    <th>SUB TOTAL</th>
                    <th>SHIPPING FEE</th>
                    <th>TOTAL </th>
                    <th>CUSTOMER ID</th>
                    <th>DATE DELIVERED</th>
                    
                    <tr>
                </tr>
                <!-- <?php
           include "../db_connection.php";

            $view = "SELECT * FROM tbl_order WHERE status = 'Delivered'";
      

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
            <td><?php echo $row['Order_ID']?></td>
            <td><?php echo $row['Sub_total']?></td>
            <td><?php echo $row['Shipping_fee']?></td>
            <td><?php echo $row['Total_Order_Price']?></td>
            <td><?php echo $row['Cust_ID']?></td>
            <td><?php echo $row['created_At']?></td>
            
        </tr>
        <?php } }?> -->
        <?php
include "../db_connection.php";
        if (isset($_POST['submit'])){
            
            
            $start = $_POST['start']; 
            $end = $_POST['end'];
            
            if($start != NULL && $end != NULL){
                $view = "SELECT * FROM tbl_order WHERE (created_At >= '$start' AND created_At <= '$end') AND status = 'Delivered'";
            }else{
                $view = "SELECT * FROM tbl_order status = 'Delivered'";
            }

            
           
            $result = $conn->query($view);
            $rowcount=$result->num_rows;
            if($rowcount==0){
                ?>
                <tr>
                  <td colspan=7 style="text-align:center;width:100%;"> No Sales </td>
                </tr>
                <?php
              }else{
            while($row=$result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['Order_ID']?></td>
            <td><?php echo $row['Sub_total']?></td>
            <td><?php echo $row['Shipping_fee']?></td>
            <td><?php echo $row['Total_Order_Price']?></td>
            <td><?php echo $row['Cust_ID']?></td>
            <td><?php echo $row['created_At']?></td>
            
        </tr>
        

            <?php  } }?> <?php } ?>
            </table>
        </div>
    </section>






</body>
</html>

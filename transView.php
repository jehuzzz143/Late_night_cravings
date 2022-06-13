<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Receipt</title>

    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            color: #000;
            background-color: #E1E1E1;
            font-family: 'Poppins', sans-serif;
        }
        .header{
            width:700px;
            background:white;
            margin-top:30px;
           
        }
        .receipt{
            margin-top:-2px;
            font-size:30px;
            float:left;
            font-weight:bold;
          

        }
        .date{
            margin-top:-2px;
            font-size:16px;
            text-align:right;
            font-weight:bold;
        }
        .date1{
            margin-top:-2px;
            font-size:16px;
            text-align:left;
            font-weight:bold;
        }
        .transac{
            text-align:right;
            font-size:16px;
            font-weight:bold;
        }
        
        .column {
        
        float: left;
        width: 50%;
        padding: 10px;
        height: 70px; /* Should be removed. Only for demonstration */
        }
        .column1 {
        padding:left;
        float: left;
        width: 50%;
        padding: 10px;
        height: 70px; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        p{
            font-family: 'Poppins', sans-serif;
        }
        
        .content-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        min-width: 550px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;
        }

        .content-table th,
        .content-table td {
        padding: 12px 15px;
        }

        .content-table tbody tr {
        border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
        }

        .content-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
        }

        .footer{
            min-width: 550px;
            background-color:red;
        }
    </style>
</head>

<body class="background">
        <?php
            include "db_connection.php";
            $orderid = $_GET['orderid'];
            $view = "SELECT * from tbl_order WHERE Order_ID = '$orderid'";
            $result=$conn->query($view);
            if($result == TRUE){
                while($row=$result->fetch_assoc()){
                $order_id = $row['Order_ID'];
                $customer = $row['Cust_ID'];
                


        ?>  
        
        
    <center>
    <div class="header" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius:2px; padding-bottom:50px; padding-top:20px;">
        <div class="row">
            <div class="column" >
                <p class="receipt" > RECEIPT</p>

            </div>
            <div class="column" >
                <p class="date">Date:<small style="font-size:16px; font-weight:400; text-decoration: underline;">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['created_At']; ?> &nbsp;&nbsp;</small></p>
                <p class="transac">Transac No: <small  style="font-size:16px; font-weight:400; text-decoration: underline;"> &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $row['Order_ID']; ?>&nbsp;&nbsp;</small></p>
            
            </div>
        </div>
        <hr>
        <div class="row" style="min-width:550px !important;">
            <div class="column"  style="padding-left:40px;">
                <p class="date1">From:<small style="font-size:16px; font-weight:400; "> <br><br>&nbsp General Luna Street Antipolo City &nbsp;&nbsp;</small></p>
            
            </div>
            <div class="column" >
                <p class="date1">To:<small style="font-size:16px; font-weight:400; "><br><br>&nbsp<?php 
                $prodname = "SELECT `user_Address` as address FROM `tbl_users` WHERE user_ID = 'USER2cbaec58'";
                $resultname = $conn->query($prodname);
                while ($rowname = mysqli_fetch_array($resultname)) {
                    echo $rowname['address'];
                }
                ?> &nbsp;&nbsp;</small></p>
                
            </div>
        </div>
        
        <table class="content-table">
            <thead>
              <tr>
                <th>Food Name</th>
                <th>quantity</th>
                <th>Unit Price</th>
                <th>Toral</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                $viewproducts = "SELECT * from tbl_order_products WHERE Order_ID = '".$orderid."'";
                $result1=$conn->query($viewproducts);
                if($result1 == TRUE){
                    while($row1=$result1->fetch_assoc()){
                        $prodname = "SELECT `prod_name` FROM `tbl_products` WHERE ID = '".$row1['Prod_ID']."'";
                        $resultname = $conn->query($prodname);
                        while ($rowname = mysqli_fetch_array($resultname)) {
                            $name = $rowname['prod_name'];
                ?>
              <tr>
                <td><?php echo $name; }?></td>
                <td><?php echo $row1['Prod_Quant']; ?></td>
                <td><?php echo $row1['Prod_Price']; ?></td>
                <td><?php echo $row1['Prod_Total_Price']; ?></td>
              </tr>
              <?php } }?>
              <tr >
                <td colspan="4"></td>
   
              </tr>
              <tr >
                <td colspan="4"></td>
   
              </tr>
              <tr style="background-color:#E7FFE0; border:none;">
                <td colspan="2">--------------------------------------------------------------------------</td>
              
                <td style="border-left: dotted 1px #f00; border-top: dotted 1px #f00; text-align:right;"><b>Subtotal Price:</b></td>
                <td style="border-right: dotted 1px #f00; border-top: dotted 1px #f00;"><?php echo $row['Sub_total']; ?></td>
              </tr>
              <tr style="background-color:#E7FFE0; border:none;"> 
              <td colspan="2"></td>
                <td style="border-left: dotted 1px #f00;text-align:right;"> <b>Shipping Fee:</b></td>
                <td style="border-right: dotted 1px #f00;"><?php echo $row['Shipping_fee']; ?></td>
              </tr>
              <tr style="background-color:#E7FFE0; border:none;">
              <td colspan="2"></td>
                <td style="border-left: dotted 1px #f00; border-bottom: dotted 1px #f00;text-align:right; white-space: nowrap;"><b>Total Order Price:</b></td>
                <td style="border-right: dotted 1px #f00; border-bottom: dotted 1px #f00;"><?php echo $row['Total_Order_Price']; ?></td>
              </tr>

       
            </tbody>
          </table>
        <div class="background-color">
            <div class="row">
                <div class="column" style="padding-left:10px;" >
                    <p  style="font-size:16px; font-weight:bold; ">Payment Method:<small style="font-size:16px; font-weight:400; text-decoration: underline;">&nbsp;&nbsp; [ Gcash ] &nbsp;&nbsp;</small></p>
                    <p  style="font-size:16px; font-weight:bold; ">Payment Method:<small style="font-size:16px; font-weight:400; text-decoration: underline;">&nbsp;&nbsp; <?php echo $row['status']; ?> &nbsp;&nbsp;</small></p>
           
                </div>
                <div class="column" >
                   
                
                </div>
            </div>
            <div class="row">
                <div class="column" style="padding-left:10px;" >
                    
           
                </div>
                <div class="column" >
                    <p  style="font-size:16px; font-weight:bold; ">Thank You For Trusting Us!</p>
                    <img src="" style="text-align:center;" alt="Business Icon" width="50" height="50">  </img>
                
                </div>
            </div>
        </div>

    </div>

    </center><?php
}
            }?>




    
</body>
</html>
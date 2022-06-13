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
        <div class="text">AUDIT LOGS</div>
      
        <div>
        <table>
            <tr>
                <th>LOG ID</th>
                <th>DESCRIPTION</th>
                <th>LOG TIME</th>
            
            </tr>
            <tr>
            <?php
            include "../db_connection.php";
            $view = "SELECT * FROM tbl_logs ORDER BY log_time";
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
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['log_Description']?></td>
            <td><?php echo $row['log_Time']?></td>
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
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
        <table>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>identifiant </th>
                <th>date de naissance </th>
                <th>salaire</th>
            
            </tr>
            <tr>
                <td>1</td>
                <td>Jean</td>
                <td>leBon</td>
                <td>1368</td>
                <td>18 Nov 1962</td>
                <td>5000$</td>
            
            </tr>
            <tr>
                <td>1</td>
                <td>Jean</td>
                <td>leBon</td>
                <td>1368</td>
                <td>18 Nov 1962</td>
                <td>5000$</td>
        
            </tr>
            
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

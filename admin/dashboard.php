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
    <?php   include ("navigation-temp.php") ?>

    <section class="home">
        <div class="text">Dashboard </div>
    <center>
        <div class="container">
            <div class="columns">
                <div class="column parent">
                    <p class="p">TOTAL ORDER</p>
                    <p class="bold">50</p>
                </div>
                <div class="column parent">
                    <p class="p">PENDING ORDER</p>
                    <p class="bold">500</p>
                </div>
                <div class="column parent">
                    <p class="p">COMPLETE TRANSACTION</p>
                    <p class="bold">50</p>
                </div>
            </div>
        </div>
        
    </center>
    <div class="container" style="margin-top:40px;">
        <p class="label text">ON GOING ORDERS</p>
        <div class="columns">
            <div class="column" >
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

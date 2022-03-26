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
                    <form>
                        <div class="column ">
                            <p class="">Starting Month</p>
                            <input type="month"  name=""  value="" required>
                            
                        </div>
                        <div class="column ">
                            <p class="">Ending Month</p>
                            <input type="month"  name=""  value="" required>
                        
                        </div>
                        <div class="column ">
                            <button type="submit" class="button_add"><span class="button__text">Generate Sale</span>
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






</body>
</html>

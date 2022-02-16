 <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Droid+Serif" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <link rel="icon" type="icon/gif" href="gardenconcept.jpg">

 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>


   </head>

<body bgcolor="#E4E9F7" >
  <div class="sidebar" id="sidebar">
    <div class="logo_content">
      <div class="logo">
        <!-- <i class='bx bxl-c-plus-plus'></i> -->
        <div class="logo_name">Garden Concept</div>
      </div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
     
      <li>
        <a href="index.php">
          <i class='bx bxs-home' id="home"></i>
          <span class="links_name">Back to Home</span>
        </a>
        <span class="tooltip"> Back to Home</span>
      </li>

      <li>
        <a href="plantcare.php">
          <i class='bx bxs-florist' id="plantcare"></i>
          <span class="links_name">Plant Care</span>
        </a>
        <span class="tooltip"> Plant Care </span>
      </li>

      <li>
        <a href="dashboard.php">
          <i class='bx bxs-dashboard' id="dashboard"></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>

      <li>
        <a href="setup.php">
          <i class='bx bxs-devices' id="devices"></i>
          <span class="links_name">Device Set up</span>
        </a>
        <span class="tooltip">Device Set up</span>
      </li>
      
      <li>
        <a href="Plant.php">
          <i class='bx bxs-plus-square' id="addplant"></i>
          <span class="links_name">Add Plant</span>
        </a>
        <span class="tooltip">Add Plant</span>
      </li>
      
      <li>
        <a href="monitoring.php">
          <i class='bx bx-list-check' id="devicelogs"></i>
          <span class="links_name">Device Logs</span>
        </a>
        <span class="tooltip">Device Logs</span>
      </li>
      
      <li>
        <a href="user.php">
          <i class='bx bxs-user' id="users"></i>
          <span class="links_name">Users</span>
        </a>
        <span class="tooltip">Users</span>
      </li>

      <li>
        <a href="registerv2.php">
           <i class='bx bxs-user-plus' id="register"></i>
          <span class="links_name">Register</span>
        </a>
        <span class="tooltip">Register</span>
      </li>

      <li>
        <a href="#" onclick="signOut()" id="signOut">
            <i class='bx bx-log-out' id="logout"></i>
          <span class="links_name">Logout</span>
        </a>
        <span class="tooltip">Logout</span>
      </li>

      <li>
        <a>
            <i class='bx bx-help-circle' id="help"></i>
          <span class="links_name">Help</span>
        </a>
        <span class="tooltip">Help</span>
      </li>
  
    </ul>
    </div>

    <div class="home_content">

    
          <!-- RUNNING DATE TIME DIV -->
      <div class="text1">
        <p id="date" style="font-family: 'Poppins', sans-serif;"></p>
      </div>

    <center>
        <div class="text"><h3>Dashboard</h3></div>



</body>
</html>

<!--#real time clock running dashboard-->
<script>
    function startClock() {
        var currentDate = new Date();
        var  hrs = currentDate.getHours();
        var  min = currentDate.getMinutes();
        var  sec = currentDate.getSeconds();
        var hrs1=checkTime(hrs);
        var min1=checkTime(min);
        var sec1=checkTime(sec);
        time = hrs1 + ":" + min1 + ":" + sec1;
        var H = +time.substr(0, 2);
        var s = time.substr(6, 8);
        var h = H % 12 || 12;
        var hours = checkTime(h);
        var ampm = (H < 12 || H === 24) ? " AM" : " PM";
        time = hours  + time.substr(2, 3)+":"+ s + ampm;

        var curdate = currentDate.getFullYear() +"-"+ (currentDate.getMonth()+1)+"-"+currentDate.getDate();
        var date= new Date(curdate).toLocaleString('en-us',{month:'long', year:'numeric', day:'numeric'});
        document.getElementById("date").innerHTML = date + "&nbsp&nbsp"+time;
        
        setTimeout(startClock, 1000);
        // 
    }
    function checkTime(i)
    {
        if(i<10)
        {
            i="0"+i
        };
        return i;
    }

startClock();
</script>



<nav class="navbar" >
    <div class="content container is-full">
      <div class="logo">

        <a href="#" class="change-color">LN's Crazings</a>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="#home" class="change-color">Home</a></li>
        <li><a href="#about" class="change-color">About</a></li>
        <li><a href="#menu" class="change-color">Menu</a></li>
        <?php
        session_start();
        // Check if the user is logged in
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
          { // This only show for NOT logged in visitors
            ?>
              <li><a href="#loginView" onClick="login()" class="change-color">Login</a></li>
            <?php
          }
          else 
          { 
            ?>
             <li class="dropdown">
               <a class="change-color update-modal">
                 Profile
               </a>
              <div class="dropdown-content">
                <a href="profile.php">My Profile</a>
                <a href="usercart.php">My Cart</a>
                <a href="LogoutFunction.php">Log Out</a>
              </div>
            </li>
           <?php
        } 
        ?>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>


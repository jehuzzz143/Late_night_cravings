<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/buttons.css">

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
        <div class="text">PRODUCTS</div>
        <button type="button" class="button_add view-modal">
            <span class="button__text">Add Product</span>
            <span class="button__icon">
                <ion-icon name="add-circle-outline"></ion-icon>
            </span>
        </button>
        <div>
        <table>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Product Type</th>
                <th>Action</th>
            </tr>
            <tr>
              <?php
              include "../db_connection.php";
              $view = "Select * from tbl_products";
              $result = $conn->query($view);
              while($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row['ID'];
                echo "<td>".$row['prod_name'];
                echo "<td>".$row['prod_desc'];
                echo "<td>".$row['prod_type'];
                echo "<td>";
                echo '<button name = "subedit" type = "submitedit" value="'.$row['ID'].'" class="button-update update-modal"><ion-icon name="build-sharp"></ion-icon></button>';
                echo '<button class="button-delete delete-modal"><ion-icon name="trash-sharp"></ion-icon></button>';
                echo "<button></button>";
                echo " </td>";
                echo "</tr>";
            }
            ?>
            
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
      <!--PRODUCT INPUTS -->
    <form method = POST action = "performAddProd.php">
    <label for="prodname">Product Name:</label>
    <input type="text" id="prodname" name="prodname" required><br>
    <label for="proddesc">Product Description:</label>
    <input type="text" id="proddesc" name="proddesc" requiered><br>
    <label for="prodtype">Product Type:</label>
    <select id="prodtype" name="prodtype" required>
    <option value="breakfast">Breakfast</option>
    <option value="lunch">Lunch</option>
    <option value="merienda">Merienda</option>
    <option value="dinner">Dinner</option>
    </select>

      <div class="field">
        <button type = "submit" formmethod = "post" name = subAddProd class="button-save">Save <ion-icon name="save-outline"></ion-icon></button>
        <button class="button-cancel">Cancel</button>
      </div>
</form>
    </div>
  </div>
  <script>
    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    cancel = popup.querySelector(".button-cancel"),
    field = popup.querySelector(".field"),
   
    copy = field.querySelector("button");
    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }
    cancel.onclick =()=>{
        viewBtn.click();
    }
  </script>
  <!-- Product Delete Modal -->
  <div class="popup deletepopup">
    <header>
      <span>Delete This Item</span>
      <div class="close"><ion-icon name="close-circle-outline"></ion-icon></div>
    </header>
    <div class="content">
     
      <div class="field">
        <button class="button-delete">Delete </ion-icon></button>
        <button class="button-cancelDelete button-cancel">Cancel</button>
      </div>
      
    </div>
  </div>
  <script>

    
    var deleteBtn = document.querySelectorAll(".delete-modal");

    const viewBtnDelete = document.querySelector(".delete-modal"),
    popupDelete = document.querySelector(".deletepopup"),
    closeDelete = popupDelete.querySelector(".close"), //medyo mali pero nagana 
    cancelDelete = popupDelete.querySelector(".button-cancelDelete"),
    fieldDelete = popupDelete.querySelector(".field");

    for (var i = 0; i < deleteBtn.length; i++) {
        deleteBtn[i].onclick = function(e) {
            e.preventDefault();
            popupDelete.classList.toggle("show");
        }
    }
   
    copyDelete = fieldDelete.querySelector("button");
    // viewBtnDelete.onclick = ()=>{
    //     popupDelete.classList.toggle("show");
    // }
    closeDelete.onclick = ()=>{
        viewBtnDelete.click();
    }
    cancelDelete.onclick =()=>{
        viewBtnDelete.click();
    }
  </script>
  <!-- Product Update Modal -->
  <div class="popup updatepopup">
    <header>
      <span>Update Product Information</span>
      <div class="close"><ion-icon name="close-circle-outline"></ion-icon></div>
    </header>
    <div class="content">
      <?php
       include "../db_connection.php";
      if(isset($POST['submitedit'])){

      $ID = $_POST['subedit'];
      

      $sql = "SELECT * FROM tbl_products";

      $result = $conn->query($sql);

      if($result->num_rows>0){
        
        $row = mysqli_fetch_array($result);
        
        $prodname = $row['prod_name'];
        $proddesc = $row['prod_desc'];
        $prodtype = $row['prod_type'];
      }
    }
    ?>
    
      <label for="prodname">Product Name:</label>
      <input type="text" id="prodname" name="prodname" value ="<?php echo $prodname ?>" required><br>
      <label for="proddesc">Product Description:</label>
      <input type="text" id="proddesc" name="proddesc" requiered><br>
      <label for="prodtype">Product Type:</label>
      <select id="prodtype" name="prodtype" required>
      <option value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="merienda">Merienda</option>
      <option value="dinner">Dinner</option>
      </select>
  
        <div class="field">
          <button type = "submit" formmethod = "post" name = subAddProd class="button-save">Save <ion-icon name="save-outline"></ion-icon></button>
          <button class="button-cancel">Cancel</button>
        </div>
 
    </div>
  </div>
  <script>

    
    var updateBtn = document.querySelectorAll(".update-modal");

    const viewBtnUpdate = document.querySelector(".update-modal"),
    popupUpdate= document.querySelector(".updatepopup"),
    closeUpdate = popupUpdate.querySelector(".close"), //medyo mali pero nagana 
    cancelUpdate = popupUpdate.querySelector(".button-cancelupdate"),
    fieldUpdate = popupUpdate.querySelector(".field");

    for (var i = 0; i < updateBtn.length; i++) {
        updateBtn[i].onclick = function(e) {
            e.preventDefault();
            popupUpdate.classList.toggle("show");
        }
    }
   
    copyUpdate = fieldDelete.querySelector("button");
    // viewBtnDelete.onclick = ()=>{
    //     popupDelete.classList.toggle("show");
    // }
    closeUpdate.onclick = ()=>{
        viewBtnUpdate.click();
    }
    cancelUpdate.onclick =()=>{
        viewBtnUpdate.click();
    }
  </script>
 






</body>
</html>

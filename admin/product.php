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
    <!-- icons Js -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
                <th>Image</th>
                <th>Action</th>
            </tr>
            <tr>
              <?php
              include "../db_connection.php";
              $view = "Select * from tbl_products";
              $result = $conn->query($view);
              while($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['prod_name']."</td>";
                echo "<td>".$row['prod_desc']."</td>";
                echo "<td>".$row['prod_type']."</td>";
                echo "<td><img height='50px' width='50px' src = 'prod_images/".$row['prod_image']."'</td>";
                echo "<td style='display:none';>";
                echo "<p>".$row['ID']."</p>";
                echo "<p>".$row['prod_name']."</p>";
                echo "<p>".$row['prod_desc']."</p>";
                echo "<p>".$row['prod_type']."</p>";
                echo "<p>".$row['prod_image']."</p>";
                echo "</td>";
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
    <form method = POST action = "performAddProd.php" enctype="multipart/form-data">
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
    </select><br>
    <label for="file">Product Picture:</label>
    <input type="file" id="file" name="file">

      <div class="field">
        <button type = "submit" formmethod = "post" name = "subAddProd" class="button-save">Save <ion-icon name="save-outline"></ion-icon></button>
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
    <form method = POST action = "performDeleteProd.php">
    <input type = "hidden" id = "prodidedit1" name = "prodidedit1">
      <label for="prodnameedit">Product Name:</label>
      <input type="text" id = "prodnameedit1" name = "prodnameedit1"  readonly><br>
      <label for= "proddescedit">Product Description:</label>
      <input type="text" id = "proddescedit1" name = "proddescedit1" readonly><br>
      <label for= "prodtypeedit">Product Type:</label>
      <select id= "prodtypeedit1" name = "prodtypeedit1" readonly>
      <option disabled value="breakfast">Breakfast</option>
      <option disabled value="lunch">Lunch</option>
      <option disabled value="merienda">Merienda</option>
      <option disabled value="dinner">Dinner</option>
      </select>
      <img src = "prod_images/CAPTURE.png" name = "prodimageedit1"></img>
      
      <div class="field">
        <button type = "submit" formmethod = "post" name = "deleteProd" class="button-delete">Delete </ion-icon></button>
        <button class="button-cancelDelete button-cancel">Cancel</button>
      </div>
  </form>
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

        $tr = $(this).closest('tr');
        var data = $tr.children("td").find("p").map(function(){
          return $(this).text();
        }).get();

            console.log(data);
            // get the input element using Id then document.getElementBy("input").value=data[0];
            
            document.getElementById("prodnameedit1").value=data[1];
            document.getElementById("proddescedit1").value=data[2];
            document.getElementById("prodtypeedit1").value=data[3];
            document.getElementById("prodidedit1").value=data[0];
            document.getElementById("prodimageedit1").value=data[4];
        // get the input element using Id then document.getElementBy("input").value=data[0];

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
    <form method = POST action = "subEditProd.php">
      <input type = "hidden" id = "prodidedit" name = "prodidedit">
      <label for="prodnameedit">Product Name:</label>
      <input type="text" id = "prodnameedit" name = "prodnameedit"  required><br>
      <label for= "proddescedit">Product Description:</label>
      <input type="text" id = "proddescedit" name = "proddescedit" required><br>
      <label for= "prodtypeedit">Product Type:</label>
      <select id= "prodtypeedit" name = "prodtypeedit" required>
      <option value="breakfast">Breakfast</option>
      <option value="lunch">Lunch</option>
      <option value="merienda">Merienda</option>
      <option value="dinner">Dinner</option>
      </select><br>
      <img src = "prod_images/" id = "prodimageedit">
      
  
        <div class="field">
          <button type = "submit" formmethod = "post" name = "subEditProd" class="button-save">Save <ion-icon name="save-outline"></ion-icon></button>
          <button type = "button" class="button-cancelupdate button-cancel">Cancel</button>
        </div>
  </form>
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

            $tr = $(this).closest('tr');
            var data = $tr.children("td").find("p").map(function(){
              return $(this).text();
            }).get();

            console.log(data);
            // get the input element using Id then document.getElementBy("input").value=data[0];
            
            document.getElementById("prodnameedit").value=data[1];
            document.getElementById("proddescedit").value=data[2];
            document.getElementById("prodtypeedit").value=data[3];
            document.getElementById("prodimageedit").src="prod_images/"+data[4];

            
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

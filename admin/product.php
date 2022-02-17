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
                <th>Nom</th>
                <th>Prenom</th>
                <th>identifiant </th>
                <th>date de naissance </th>
                <th>salaire</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Jean</td>
                <td>leBon</td>
                <td>1368</td>
                <td>18 Nov 1962</td>
                <td>5000$</td>
                <td>
                    <button class="button-update update-modal"><ion-icon name="build-sharp"></ion-icon></button>
                    <button class="button-delete delete-modal"><ion-icon name="trash-sharp"></ion-icon></button>
                    <button></button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Jean</td>
                <td>leBon</td>
                <td>1368</td>
                <td>18 Nov 1962</td>
                <td>5000$</td>
                <td>
                    <button class="button-update update-modal"><ion-icon name="build-sharp"></ion-icon></button>
                    <button class="button-delete delete-modal"><ion-icon name="trash-sharp"></ion-icon></button>
                    <button></button>
                </td>
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
     
      <div class="field">
        <button class="button-save">Save </ion-icon></button>
        <button class="button-cancelupdate button-cancel">Cancel</button>
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

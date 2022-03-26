<center>
  <div class="about">
    <div class="title">OUR MENU </div>
  </div>
</center>
<div class="container" style="margin-bottom:20px;  ">
   
  <div class="columns is-mobile is-multiline">
    

      <?php
              include "db_connection.php";
              $view = "Select * from tbl_products LIMIT 8";
              $result = $conn->query($view);
              while($row=$result->fetch_assoc()){

                $prodname = $row['prod_name'];
                $proddesc = $row['prod_desc'];
                $prodtype = $row['prod_type'];
                $prodimage = $row['prod_image'];
                $prodimgpath = "admin/prod_images/".$prodimage
                ?>
                <div class="column is-3 padding-gall" stlye="background-color:red;">
                  <div class="container zoomInside">
                    <img class="image-gall zoom" src="<?php echo $prodimgpath ?>" alt="Review Photos">
                  </div>
                <div>
                      <div class="columns">
                          <div class="column"><p class="product-name"> <?php echo $prodname ?> </p></div>
                         
                      </div>
                      
                      <small class="product-description"><?php echo $proddesc ?></small>

                  </div>
                </div> 
                <?php  
            }
        ?>
     
      
  </div>
  <center>
      <div class="about">
        <div class="title"><a href = 'orderproducts.php'> >>> BUY <<< </a></div>
      </div>
  </center>
</div>
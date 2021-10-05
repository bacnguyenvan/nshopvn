<?php 
  require_once "admin/autoload/autoload.php";
  require_once "layout/header.php";

  $categories = $db->fetchAll_condition('category','home=1');
  // print_r($categories);
  // die();
 ?>
 <!-- ######### -->

        <!-- Products -->
      <div class="col-lg-9 col-sm-12">

        <!--  category -->
        <?php 
            foreach($categories as $item){
        ?>
          <div class="row justify-content-between">
            <!-- title product -->
              <div class="product-title">
                <h4 class="text-uppercase"><?php echo $item['name'] ?></h4>
              </div>
              <div class="product-filter-wrapper">
                <ul class="product-filter-list d-flex">
                  <li class="product-filter-list-item-first mx-1">
                    <a href="#">
                      <span class="product-filter-list-text">Tất cả </span>
                    </a>
                  </li>
                  
                  <!-- type_of_product -->
                  <?php $type_of_product = $db->fetchAll_condition('typeofproduct',"id_category=".$item['id']);
                     
                   ?>
                  <?php foreach($type_of_product as $type_product) {?>
                  <li class="product-filter-list-item mx-1">
                    <a href="#">
                      <span class="product-filter-list-text"><?php echo $type_product['name'] ?></span>
                    </a>
                  </li>
                  <?php }?>

                </ul>
              </div>
            <!-- end of title product -->
          </div>
          

          <div class="row">   <!-- product -->
            <?php foreach($type_of_product as $type_product) {?>
              <?php $products = $db->fetchAll_condition('products',"type_of_product_id=".$type_product['id']) ?>
              <?php foreach($products as $pt){ ?>
              <div class="col-lg-3 col-6 my-3 ">
                <a href="#" >
                  <div class="card single-product">
                    <img class="card-img-top" src="admin/public/uploads/products/<?php echo $pt['image'] ?>" alt="Card image cap">
                    <div class="card-body product-text d-flex ">
                      <p class="card-text mb-2" title="<?php echo $pt['name'] ?>">
                        <?php echo add3dots($pt['name'],'...',65) ?>
                      </p>
                      <p class="card-text my-0 price-text"><span class="font-weight-bold"><?php echo $pt['price'] ?></span></p>
                    </div>
                    <div class="product-action-list">
                      <div class="quick-view my-2">
                        <a href="" class="action-quick-view">
                          <i class="fas fa-search-plus"></i>
                        </a>
                      </div>
                      <div class="add-to-cart my-2">
                        <a href="" class="action-add-to-cart">
                          <i class="fas fa-shopping-cart"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <!-- end of single product -->
              <?php } ?>
            <?php }?>
          </div>

        <?php }?>
        
          
        


          
        
          
          


      </div>

<?php require_once "layout/footer.php" ?>
    
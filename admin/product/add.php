<?php 
    require_once  "../autoload/autoload.php";
    $active = 'product'; // active 
    $categories = $db->fetchAll('category');
    

    $type_of_product = $db->fetchAll_condition('typeofproduct',"id_category=".$categories[0]['id']);

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        $data =
        [
            'name' => postInput('name'),
            'type_of_product_id' => postInput('type_of_product_id'),
            'price' => postInput('price'),
            'sale' => postInput('sale'),
            
            'number' => postInput('number')
        ];
        $errors = [];
        
        if(postInput('name') == '')
        {
            $errors['name'] = 'Vui lòng nhập tên sản phẩm';
        }

        if(postInput('type_of_product_id') == '')
        {
            $errors['type_of_product_id'] = 'Vui lòng nhập loại sản phẩm';
        }

        if(postInput('price') == '')
        {
            $errors['price'] = 'Vui lòng nhập giá sản phẩm';
        }
        if(postInput('number') == '')
        {
            $errors['number'] = 'Vui lòng nhập số lượng';
        }
        
        if($_FILES['images']['name'] == ''){
            $errors['image'] = 'Vui lòng import hình';
        }
        
       
        if(empty($errors)){
            //check exist
            $checkNameExist = $db->fetchOne('products',"type_of_product_id = '".$data['type_of_product_id']."' AND name= '".$data['name']."' ");

            if($checkNameExist){
                $_SESSION['error'] = 'Sản phẩm đã tồn tại';
            }else{

                if(isset($_FILES['images'])){
                $file_name  = $_FILES['images']['name'];
                $file_tmp   = $_FILES['images']['tmp_name'];
                $file_type  = $_FILES['images']['type'];
                $file_erro  = $_FILES['images']['error'];

                    if($file_erro == 0){
                        $part = IMAGE."products/";
                        $data['image'] = $file_name;
                    }else{/*do nothing*/}
               
                }else{/*do nothing*/}
            
                $id_insert = $db->insertDB("products",$data);
                if($id_insert){
                    move_uploaded_file($file_tmp, $part.$file_name);

                    $_SESSION['success'] = "Thêm mới thành công";
                    redirectStyle('product');
                }else{
                    $_SESSION['error'] = "Thêm mới thất bại";
                    redirectStyle('product');
                }
            }
            
        }
    }

?>

<?php require_once "../header.php" ?>
    
        <!-- content -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Thêm sản phẩm
            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Home</a>
                            </li>
                            <li class="">
                                <i class="fa fa-file"></i> Sản phẩm
                            </li>

                            <li class="active">
                                <i class="fa fa-plus-square"></i> Thêm mới
                            </li>

                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->

                <div class="row form-add" style="margin-left: 15%;margin-right: 15%;width:70%">
                    <div class="col-md-12">
                        
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Danh mục<span style="color: red">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category" id="category">
                                        
                                        <?php 
                                            foreach($categories as $item){ ?>

                                                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>

                                            <?php } ?>

                                        ?>
                                        
                                     </select>
                                     <?php if(isset($errors['category'])) { ?>
                                        <p class="text-danger">
                                            <?php echo $errors['category'] ?>
                                        </p>

                                  <?php } ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Loại sản phẩm<span style="color: red">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type_of_product_id" id="loaisp">
                                        
                                        <?php 
                                            foreach($type_of_product as $item){ ?>

                                                <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>

                                            <?php } ?>

                                        ?>
                                        
                                     </select>
                                    
                                </div>
                            </div>

							<div class="form-group row">
						    	<label for="inputEmail3" class="col-sm-2 col-form-label">Tên sản phẩm <span style="color: red">*</span></label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="inputEmail3" placeholder="Nhập tên" name='name'>

                                  <?php 
                                        if(isset($errors['name'])){ ?>
                                            <p class="text-danger">
                                                <?php echo $errors['name'] ?>
                                            </p>
                                        <?php } ?>


                                   
							    </div>
							</div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Giá <span style="color: red">*</span></label>
                                <div class="col-sm-10">
                                  <input type="number" min="1" class="form-control" id="inputEmail3" placeholder="Nhập giá" name='price'>

                                  <?php 
                                        if(isset($errors['price'])){ ?>
                                            <p class="text-danger">
                                                <?php echo $errors['price'] ?>
                                            </p>
                                        <?php } ?>


                                   
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Số lượng <span style="color: red">*</span></label>
                                <div class="col-sm-10">
                                  <input type="number" min="1"  class="form-control" id="inputEmail3" placeholder="Nhập số lượng" name='number'>

                                  <?php if(isset($errors['number'])) { ?>
                                        <p class="text-danger">
                                            <?php echo $errors['number'] ?>
                                        </p>

                                  <?php } ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Giảm giá</label>
                                <div class="col-sm-4">
                                  <input type="number" min="1" class="form-control" id="inputEmail3" placeholder="giảm giá" name='sale'>
                                </div>

                                <label class="col-sm-2 col-form-label">Hình <span style="color: red">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" name="images" class="form-control">
                                    <?php if(isset($errors['image'])) { ?>
                                        <p class="text-danger">
                                            <?php echo $errors['image'] ?>
                                        </p>

                                  <?php } ?>
                                </div>
                            </div>

                           
                           
                             <?php  require_once __DIR__. DIRECTORY_SEPARATOR."../message/message.php";  ?>
						    <div class="form-group row">
							    <div class="col-sm-12">
							      <button type="submit" class="btn btn-primary submit-form" style="float: right">Lưu</button>
							    </div>
						    </div>
						</form>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- end content-->

<?php require_once "../footer.php" ?>    

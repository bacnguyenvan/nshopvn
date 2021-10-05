<?php 
    require_once  "../autoload/autoload.php";
    $active = 'loaisp'; // active 
    $categories = $db->fetchAll('category');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        $data =
        [
            'name' => postInput('name'),
            'id_category' => postInput('category')
            
        ];
        $errors = [];
        
        if(postInput('name') == '')
        {
            $errors['name'] = 'Vui lòng nhập tên sản phẩm';
        }

        if(postInput('category') == '')
        {
            $errors['category'] = 'Vui lòng nhập loại danh mục';
        }

    
       
        if(empty($errors)){
            //check exist
            $checkNameExist = $db->fetchOne('typeofproduct',"id_category = '".$data['category_id']."' AND name= '".$data['name']."' ");

            if($checkNameExist){
                $_SESSION['error'] = 'loại sản phẩm đã tồn tại';
            }else{

               
                $id_insert = $db->insertDB("typeofproduct",$data);
                if($id_insert){
                    
                    $_SESSION['success'] = "Thêm mới thành công";
                    redirectStyle('loaisanpham');
                }else{
                    $_SESSION['error'] = "Thêm mới thất bại";
                    redirectStyle('loaisanpham');
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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Home</a>
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
                                    <select class="form-control" name="category">
                                        <option value=""> --Lựa chọn danh mục-- </option>
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
						    	<label for="inputEmail3" class="col-sm-2 col-form-label">Tên <span style="color: red">*</span></label>
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

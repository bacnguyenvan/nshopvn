<?php
    $active = 'product'; 
    require_once  "../autoload/autoload.php";
    

    $sql = "SELECT products.*,typeofproduct.name as namecate FROM products
            INNER JOIN typeofproduct ON typeofproduct.id = products.type_of_product_id ORDER BY type_of_product_id ASC";
   
   
    $products = $db->fetchSql($sql);
   
    
  

?>

<?php require_once "../header.php" ?>
    
        <!-- content -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Sản phẩm
                            <a href="add.php" class="btn btn-success">Thêm mới <i class="fa fa-plus-square"></i></a>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(). "admin" ?>">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Sản phẩm
                            </li>

                        </ol>

                        <!-- success and error message -->
                        <?php  require_once __DIR__. DIRECTORY_SEPARATOR."../message/message.php";  ?>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row -->
                

                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="table-responsive">
                            
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
                                        <th>Loại sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $stt=1;
                                     foreach($products as $item) { ?>
                                        <tr>
                                            <td><?php echo $stt?>
                                                
                                            </td>
                                            <td style="text-align: center;"><?php echo $item['name'] ?>
                                                <br><img src="../public/uploads/products/<?php echo $item['image'] ?>" style="width: 100px;">
                                            </td>
                                            <td><?php echo $item['namecate'] ?></td>
                                            <td><?php echo number_format($item['price']) ?></td>
                                            <td><?php echo $item['number'] ?></td>
                                            
                                            
                                            <td><?php echo $item['created_at']?></td>
                                            <td style="text-align: center;">
                                                
                                                <a title="xóa" id="<?php echo $item['id'] ?>" class="btn btn-warning btn_delete" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php $stt++; } ?>
                                </tbody>
                            </table>
                            

                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- end content-->

<?php require_once __DIR__. DIRECTORY_SEPARATOR."../footer.php" ?>    

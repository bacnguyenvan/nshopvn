<?php
    $active = 'loaisp'; 
    require_once  "../autoload/autoload.php";
    

    $sql = "SELECT typeofproduct.*,category.name as namecate FROM typeofproduct
            INNER JOIN category ON category.id = typeofproduct.id_category ORDER BY id_category ASC";
   
   
    $type_of_product = $db->fetchSql($sql);
   
    
  

?>

<?php require_once "../header.php" ?>
    
        <!-- content -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Loại sản phẩm
                            <a href="add.php" class="btn btn-success">Thêm mới <i class="fa fa-plus-square"></i></a>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(). "admin" ?>">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Loại sản phẩm
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
                                        <th>Danh mục</th>
                                        
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $stt=1;
                                     foreach($type_of_product as $item) { ?>
                                        <tr>
                                            <td><?php echo $stt?></td>
                                            <td><?php echo $item['name'] ?></td>
                                            <td>
                                                <?php echo $item['namecate'] ?>
                                                
                                            </td>
                                            
                                            <td><?php echo $item['created_at']?></td>
                                            <td style="text-align: center;">
                                                <a class="btn btn-info" href="edit.php?id=<?php echo $item['id'] ?>" ><i class="fa fa-edit"></i></a>
                                                <a id="<?php echo $item['id'] ?>" class="btn btn-warning btn_delete" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-trash"></i></a>
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

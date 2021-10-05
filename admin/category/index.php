<?php

    require_once  "../autoload/autoload.php";
    $active = 'category'; // active 
$categories = $db->fetchAll('category');



 ?>

<?php require_once "../header.php" ?>
    
        <!-- content -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Danh sách danh mục
                            <a href="add.php" class="btn btn-success">Thêm mới <i class="fa fa-plus-square"></i></a>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url(). "admin" ?>">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Danh mục
                            </li>

                        </ol>
                        <!-- success and error message -->
                        <?php  require_once "../message/message.php";  ?>
                        
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
                                        <th>Stt</th>
                                       
                                        <th>Tên</th>
                                        <th style="text-align: center;">Trạng thái</th>
                                        <th>Thời gian tạo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php $stt=1;
                                    foreach($categories as $item) { ?>
                                        <tr>
                                            <td><?php echo $stt ?></td>
                                            
                                            <td><?php echo $item['name'] ?></td>
                                            <td style="text-align: center;">
                                                <a href="home.php?id=<?php echo $item['id'] ?> " class="btn <?php echo $item['home']==1?'btn-info':'btn-default' ?>">
                                                    <?php echo $item['home']==1?'Hiển thị':'Không' ?>
                                                    
                                                </a>
                                                
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

<?php require_once "../footer.php" ?>    

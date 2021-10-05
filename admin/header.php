<?php 
    
    if(!isset($_SESSION['login'])){
       header('location: http://localhost/nshopvn.com/admin/login/');
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>ADMIN - TRANG CHỦ</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>admin/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>admin/public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>admin/public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>admin/public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>admin/public/jquery-confirm/jquery-confirm.css " rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                        <li>
                            <a href="login/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php echo isset($active) && $active=='home' ?'active':'' ?>">
                        <a href="<?php echo modules('')?>"><i class="fa fa-fw fa-dashboard"></i> Trang điều khiển</a>
                    </li>
                    
                    <li class="<?php echo isset($active) && $active=='category' ?'active':'' ?>">
                        <a href="<?php echo modules('category')?>"><i class="fa fa-fw fa-table"></i> Danh sách danh mục</a>
                    </li>
                    <li class="<?php echo isset($active) && $active=='loaisp' ?'active':'' ?>">
                        <a href="<?php echo modules('loaisanpham')?>"><i class="fa fa-fw fa-edit"></i> Danh sách loại sản phẩm</a>
                    </li>
                    <li class="<?php echo isset($active) && $active=='product' ?'active':'' ?>">
                        <a href="<?php echo modules('product')?>"><i class="fa fa-fw fa-desktop"></i> Sản phẩm</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Quản lí đơn hàng</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
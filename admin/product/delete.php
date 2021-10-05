<?php 
	require_once  "../autoload/autoload.php";
    $active = 'loaisp'; // active

	$id = (int)getInput('id'); 

    $checkCategory = $db->fetchID('products',$id);
    if(!$checkCategory){
        $_SESSION['error'] = 'Dữ liệu không tồn tại';
        redirectStyle('product');
    }
    $num = $db->deleteDB('products',$id);
    
    if($num > 0)
    {
    	$_SESSION['success'] = 'Đã xoá thành công';
    	redirectStyle('product');
    }else{
    	$_SESSION['error'] = 'Xóa thất bại';
        redirectStyle('product');
    }


?>
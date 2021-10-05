<?php 
	require_once  "../autoload/autoload.php";
    $active = 'loaisp'; // active

	$id = (int)getInput('id'); 

    $checkCategory = $db->fetchID('typeofproduct',$id);
    if(!$checkCategory){
        $_SESSION['error'] = 'Dữ liệu không tồn tại';
        redirectStyle('loaisanpham');
    }
    $num = $db->deleteDB('typeofproduct',$id);
    // $num = $db->updateDB('category',['deleted_at'=>1],['id'=>$id]);
     
    if($num > 0)
    {
    	$_SESSION['success'] = 'Đã xoá thành công';
    	redirectStyle('loaisanpham');
    }else{
    	$_SESSION['error'] = 'Xóa thất bại';
        redirectStyle('loaisanpham');
    }


?>
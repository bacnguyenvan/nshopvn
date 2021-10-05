<?php 
	require_once  "../autoload/autoload.php";
    $active = 'category'; // active

	$id = (int)getInput('id'); 

    $checkCategory = $db->fetchID('category',$id);
    if(!$checkCategory){
        $_SESSION['error'] = 'Dữ liệu không tồn tại';
        redirectStyle('category');
    }
    $num = $db->deleteDB('category',$id);
    // $num = $db->updateDB('category',['deleted_at'=>1],['id'=>$id]);
     
    if($num > 0)
    {
    	$_SESSION['success'] = 'Đã xoá thành công';
    	redirectStyle('category');
    }else{
    	$_SESSION['error'] = 'Xóa thất bại';
        redirectStyle('category');
    }


?>
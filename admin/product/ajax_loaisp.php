<?php 
	
	require_once  "../autoload/autoload.php";
	if(isset($_GET['idloaisp']))	$id = $_GET['idloaisp'];
	else $id = 0;
	$type_of_product = $db->fetchAll_condition('typeofproduct',"id_category=".$id);
	
	foreach($type_of_product as $item){ 

        echo "<option value =".$item["id"].">". $item["name"]." </option>";

    }

?>
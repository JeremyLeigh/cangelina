<?php
require_once("read.php");


	$tbl = "tbl_categories";
	$col = "item_category";
	$id = $_GET['itemCat'];
	//$id = "1";

	$result = getSome($tbl,$col,$id);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
?>

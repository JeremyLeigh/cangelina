<?php
require_once("read.php");


	$tbl = "tbl_items";
	$col = "item_id";
	$id = $_GET['itemNum'];

	$result = getSome($tbl,$col,$id);
	$row = mysqli_fetch_assoc($result);
	echo json_encode($row);
?>

<?php
require_once("read.php");


	$tbl = "tbl_items";

	$result = getAll($tbl);
	while($row = mysqli_fetch_assoc($result)) {
	$fav = $row['item_fav'];
	$name = $row['item_name'];
	$img = $row['item_img'];
	$id = $row['item_id'];
	$myArray[] = array('item_fav'=>$fav,'item_name'=>$name,'item_img'=>$img,'item_id'=>$id);
}
echo json_encode($myArray);
?>

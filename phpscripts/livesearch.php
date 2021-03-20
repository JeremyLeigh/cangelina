<?php
require_once("read.php");
$tbl = "tbl_items";
$q=$_GET["q"];

$result = getLike($tbl,$q);
$output = null;
while($row = mysqli_fetch_assoc($result)) {
$name = $row['item_name'];
$id = $row['item_id'];
$myArray[] = array('item_name'=>$name,'item_id'=>$id);
$output = array_slice($myArray, 0, 5);
}

echo json_encode($output);
?>

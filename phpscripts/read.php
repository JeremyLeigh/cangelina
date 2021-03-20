<?php
	//echo "from read.php";
	//read.php read gathers and stores (temp) information from the database.
	function getAll($tbl) {
		require("connect.php");
		$queryAll = "SELECT * FROM {$tbl};";
		$result = mysqli_query($link, $queryAll);
		if($result > "") {
			return $result;
		}else{
			$error ="There was an error accessing this information. Please contact us for tech support.";
			return $error;
		}
		mysqli_close($link);
	}

	function getFav() {
		require("connect.php");
		$queryFav = "SELECT * FROM `tbl_items` WHERE `item_fav` = 1;";
		$result = mysqli_query($link, $queryFav);
		if($result > "") {
			return $result;
		}else{
			$error ="There was an error accessing this information. Please contact us for tech support.";
			return $error;
		}
		mysqli_close($link);
	}

	function getSome($tbl,$col,$id) {
		require("connect.php");
		$queryAll = "SELECT * FROM {$tbl} WHERE $col = $id;";
		$result = mysqli_query($link, $queryAll);
		if($result > "") {
			return $result;
		}else{
			$error ="There was an error accessing this information. Please contact us for tech support.";
			return $error;
		}
		mysqli_close($link);
	}

	function getLike($tbl,$q) {
		require("connect.php");
		$search = "'%$q%'";
		$queryLike = "SELECT * FROM {$tbl} WHERE `item_name` LIKE $search";
		$result = mysqli_query($link, $queryLike);
		if($result > "") {
			return $result;
		}else{
			return $result;
		}
		mysqli_close($link);
	}
?>

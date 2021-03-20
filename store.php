<!doctype html>
<?php
	require("phpscripts/read.php");
?>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C'Angelina Catering - Menu</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/pages.css" rel="stylesheet" type="text/css" media="screen">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/store.js" async defer></script>
<script src="js/noScroll.js" async defer></script>
<script src="js/search.js" async defer></script>
<script src="js/main.js" async defer></script>
<script src="js/onscroll-effect.es6.js"></script>
</head>
<body id="storePage">
  <?php
  $tbl = "tbl_categories";
	$getInfo = getAll($tbl);
  $tbl = "tbl_items";
  $getItems = getAll($tbl);
  $getFavs = getFav();
   ?>
  <div id="screenWipe"><div id="popUpDetails"><div id="detailsImg"></div><div><h4>Item Name</h4><p>Qty: 1</p><h5>Details:</h5><p>Lorum ipsum dolor sit amet, consecutor.</p></div><img id="xPopUp" src="icons/cancel1.svg" alt="Exit"></div></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="BcPt7BLD"></script>
  <?php include "includes/nav.php"?>
  <div class="col-2 workHeader storeImg"><h2>Favourites<br>Menu</h2></div>
    <section class="container-fluid">
      <h2 class="hidden">Favourites Menu</h2>
      <div class="row gx-0 justify-content-center">
        <div class="gx-0 col-xl-8 col-lg-8 col-12">
          <div id="catWrap" class="row justify-content">
            <ul class="col-lg-8 col-10">
              <?php
              while ($row = mysqli_fetch_assoc($getInfo)){
                echo "<li class='catLinks' id='";
								echo $row['col_catnumber'];
								echo "'><p>";
                echo $row['col_catname'];
                echo "</p></li>";
              }?>
            <li id="0" class="loadAll catLinks"><p>All</p></li>
            </ul>
        </div>
        <div data-scroll="mulder" id="resultWrap" class="row gx-0 justify-content">
            <h4 id="resultHeader">Results For: All</h4>
        <div class="col-12 resultSlider">
          <ul id="resultList">
            <?php
            while ($row = mysqli_fetch_assoc($getItems)){
              echo "<li><div class='menuItem'>";
              if ($row['item_fav'] == 1)
              {
                echo "<img class='star' src='icons/star.svg' alt='Customer Favourite'>";
              }
              echo "<img class='thb' src='images/thumb/";
              echo $row['item_img'];
              echo "' alt='Menu Item'><div><h4>";
              echo $row['item_name'];
              echo "</h4><a id='{$row['item_id']}' class='viewDets' onclick='return false;' href='#'>View Details</a></div></div></li>";
            }?>
          </ul>
        </div>
        </div>
        <div data-scroll="mulder" id="favouritesWrap" class="row gx-0 justify-content">
            <h4 id="favouritesHeader">Customer Favourites</h4>
        <div class="col-12 resultSlider">
          <ul>
            <?php
            while ($row = mysqli_fetch_assoc($getFavs)){
              echo "<li><div class='menuItem'>";
              if ($row['item_fav'] == 1)
              {
                echo "<img class='star' src='icons/star.svg' alt='Customer Favourite'>";
              }
              echo "<img class='thb' src='images/thumb/";
              echo $row['item_img'];
              echo "' alt='Menu Item'><div><h4>";
              echo $row['item_name'];
              echo "</h4><a id='{$row['item_id']}' class='viewDets' onclick='return false;' href='#'>View Details</a></div></div></li>";
            }?>
          </ul>
        </div>
        </div>
      </div>
  </div>
    </section>
  <?php include "includes/footer.php"?>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C'Angelina Catering</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/main.js" async defer></script>
</head>
<body>
<?php include "includes/nav.php"?>
  <section id="imageSection">
    <h2 class="hidden">Title</h2>
    <div id="redImage" class="row justify-content-center"><div class="col-xxl-8 col-lg-10 col-12"><img src="images/phHome.png" alt="C'Angelina Home"></div></div>
  </section>
  <section id="introSection" class="container">
    <h2 class="hidden">Introduction</h2>
    <div id="redText" class="row justify-content-center">
      <h2>Serving London Communities</h2>
      <p class="col-lg-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Scelerisque felis imperdiet proin fermentum leo vel orci.</p>
    </div>
    </section>
    <section id="favSection" class="container">
      <h2 class="hidden">Costumer Favourites</h2>
    <div class="row gx-0 justify-content-center">
      <div class="col-xl-8 col-lg-10 col-sm-12 col-11">
        <h3 class="secHead">CUSTOMER FAVOURITES</h3>
        <a class="viewBtn" href="store.html">View All</a>
      </div>
    </div>
    <div class="blockWrap row justify-content-center">
      <div class="redBlocks col-xl-4 col-lg-5 col-sm-6 col-11"><div id="redPies" class="redBlockInner"><h4>MEAT PIES</h4></div></div>
      <div class="redBlocks col-xl-4 col-lg-5 col-sm-6 col-11"><div id="redPig" class="redBlockInner"><h4>FULL PIGS</h4></div></div>
    </div>
    <div class="blockWrap row justify-content-center">
      <div class="redBlocks col-xl-5 col-lg-6 col-sm-7 col-11"><div id="redPor" class="redBlockInner"><h4>PORCHETTA</h4></div></div>
      <div class="redBlocks col-xl-3 col-lg-4 col-sm-5 col-11"><div id="redSaus" class="redBlockInner"><h4>SAUSAGES</h4></div></div>
    </div>
    <div id="extraBlocks" class="blockWrap row justify-content-center">
      <div class="redBlocks col-xl-4 col-lg-5 col-sm-6 col-11"><div id="redLas" class="redBlockInner"><h4>LASAGNAS</h4></div></div>
      <div class="redBlocks col-xl-4 col-lg-5 col-sm-6 col-11"><div id="redWork" class="redBlockInner"><h4>WORKSHOPS</h4></div></div>
    </div>
  </section>
  <section id="caroSection">
    <h2 class="hidden">Our Brand Slideshow</h2>
    <div id="caroWrap" class="row gx-0">
      <div id="carousel" class="col-12"></div>
    </div>
  </section>
  <section id="socSection" class="container">
    <h2 class="hidden">Social Journal</h2>
    <div class="row justify-content-center">
      <div class="col-lg-10 col-sm-12 col-11">
        <h3 class="secHead">SOCIAL JOURNAL</h3>
        <a class="viewBtn" href="https://www.facebook.com/cangelinameatcatering/">View All</a>
      </div>
      <div class="col-lg-11 col-12">
        <div class="elfsight-app-c2f5aa3e-20ce-4d83-9132-573fefaae3b0"></div>
      </div>
      <div id="elfSightCover" class="col-12"><div></div></div>
    </div>
  </section>
  <section id="locSection" class="container">
    <h2 class="hidden">Our Location</h2>
    <div class="row justify-content-center">
      <div id="locBox" class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-11">
        <ul>
          <li><h3>LOCATION</h3></li>
          <li><p>485-469 Third St, London ON, N5W 4W6</p></li>
          <li><p>Phone (519) 204-8189</p></li>
          <li><p>Email c-angelina@rogers.com</p></li>
          <li><p>Tues-Fri 9am-6pm</p></li>
          <li><p>Sat 9am-4pm</p></li>
          <li><p>Sun-Mon Closed</p></li>
          <li><div id="locDir" class="col-sm-6 col-11"><h4>Directions</h4></div></li>
        </ul>
      </div>
      <div id="locMap" class="gx-0 col-xl-4 col-lg-5 col-md-6 col-sm-12 col-11"><img src="images/phMap.png" alt="Our Location Map"></div>
    </div>
  </section>
  <?php include "includes/footer.php"?>
</body>
</html>

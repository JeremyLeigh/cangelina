<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C'Angelina Catering - Contact</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/pages.css" rel="stylesheet" type="text/css" media="screen">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/main.js" async defer></script>
</head>
<body>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="BcPt7BLD"></script>
  <?php include "includes/nav.php"?>
    <section class="container-fluid contactSection">
      <h2 class="hidden">Contact</h2>
      <div class="row justify-content-center">
        <div class="gx-0 col-xxl-5 col-lg-6 col-sm-8 col-10 contactWrap">
          <h1 id="fundHeader">Contact Us</h1>
          <form class="contactForm" target="_blank" action="https://formsubmit.co/jeremyleigh6@gmail.com" method="POST">
            <div class="formGroup">
              <label for="firstname">Name</label>
              <input type="text" name="name" value="">
            </div>
            <div class="formGroup">
              <label for="email">Email</label>
              <input type="text" name="mail" value="">
            </div>
            <div class="formGroup">
              <label for="subject">Subject</label>
              <input type="text" name="subject" value="">
            </div>
            <div class="formGroup">
              <label for="message">Message</label>
              <textarea name="message" placeholder=""></textarea>
            </div>
            <button type="submit" name="submit">SEND</button>
          </form>
        </div>
    </div>
    </section>
  <?php include "includes/footer.php"?>
</body>
</html>

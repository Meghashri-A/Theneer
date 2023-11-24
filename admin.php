<?php
    
include("connect.php");
 
if(isset($_POST['login'])) {
    $u=$_POST['username'];
    $p=$_POST['pwd'];
    if(($u=="admin")&& ($p=="adminlog"))
    {
        ?>
        <html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<script src="jquery-3.6.0.min.js"></script>
    <script src="jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
           
            $("#log").validate({
                messages: {
                    name: {
                        required: "Enter Package"   
                    },
                }
            });

        });
    </script>
  </head>
<body>

<section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>ADMIN</h2>
          <p>DETAILS</p>
        </div>

        <form action="sub.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id=log>
          <div class="row">
            

              <input type="text" name="name" class="form-control" id="name" placeholder="Package" required >
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
            <input type="number" name="num" class="form-control" id="num" placeholder="Number of seats" required >
            <div class="validate"></div>
          </div>
          <div class="row">
            <input type="date" name="ate" class="form-control" id="ate" placeholder="Date" required >
            <div class="validate"></div>
          </div>
            <br>
            
          <div class="text-center"><button type="submit" name="det">DETAILS</button>
         </form>
      </div>
    </section>
    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  

 
  <script src="assets/js/main.js"></script>
</body>

    </html>
    <?php
     exit();
    }
   
}
?>

<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link href="assets/css/style.css" rel="stylesheet">

<script src="jquery-3.6.0.min.js"></script>
    <script src="jquery.validate.js"></script>

  </head>
<body>

<section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>ACCOUNT</h2>
          <p>LOGIN---ADMIN</p>
        </div>

        <form action="admin.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id=log>
          <div class="row">
            

              <input type="text" name="username" class="form-control" id="username" placeholder="Your UserName" required >
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
              <div class="validate"></div>
            </div>
            <br>
            
          <div class="text-center"><button type="submit" name="login">LOG IN</button>
         </form>
      </div>
    </section>
    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  

 
  <script src="assets/js/main.js"></script>
</body>

    </html>
   
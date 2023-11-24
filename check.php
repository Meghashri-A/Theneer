<?php
    
include("connect.php");
 
if(isset($_POST['login'])) {
    $am=$_POST['date'];
    $sqll = "SELECT a.date,a.name,a.num FROM bookdet a where a.date='$am'";
    $result = mysqli_query($conn, $sqll);
    if($result->fetch_assoc()>0)
     {

        echo '<script>alert("TABLES AVAILABLE!!CHECK MAIL")</script>';
        include("index.html");exit();
        }
        else
        {
            echo '<script>alert("TABLES NOT AVAILABLE!!CHECK MAIL")</script>'; 
       include("index.html");exit();
      
        }
}
?>







<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>ACCOUNT</h2>
          <p>WELCOME</p>
        </div>

        <form action="check.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
              <input type="text" name="name" class="form-control" id="name" placeholder="Type of table">
              <div class="validate"></div>
              </div><br>
              <div class="row">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" >
              <div class="validate"></div>
            </div><br>
              <div class="row">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people">
              <div class="validate"></div>
            </div>
          </div>
          <div class="text-center"><button type="submit" name="login">BOOK</button>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

</body>
    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>


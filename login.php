<?php
    
include("connect.php");
 
if(isset($_POST['login'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM REGISTER WHERE username='"
    . $_POST["username"] . "' AND
    password='" . $_POST["pwd"] . "'    ");
   
    $num = mysqli_num_rows($sql);
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:check.php");
        exit();
    }
    else {
?>
<script>
    alert("Invakid Username and Password");
    </script>
<?php
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

    <script>
        $(document).ready(function () {
           
            $("#log").validate({
                messages: {
                    username: {
                        required: "Enter Username"   
                    },
                    pwd: {
                        required: "Enter password"   
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
          <h2>ACCOUNT</h2>
          <p>LOGIN</p>
        </div>

        <form action="login.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id=log>
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
   
<?php

include("connect.php");

if(isset($_POST['submit'])) {

  $user=$_POST["username"];
  $conn =mysqli_connect("localhost","root","meghasql","tea");
  $sqll = "SELECT a.username FROM register a where a.username='$user'";
  $result = mysqli_query($conn, $sqll);
   if($result->fetch_assoc()>0)
   {
    header("location:same.php");
    exit();
      } 
      else{
        $query = mysqli_query($conn,
	"INSERT INTO REGISTER SET firstname='"
	. $_POST["firstname"] . "' ,lastname='"
	. $_POST["lastname"] . "' ,username ='"
	. $_POST["username"] . "' ,email='"
	. $_POST["mail"] . "'	 ,mobile='"
	. $_POST["phone"] . "'	 ,password='"
	. $_POST["pass"] . "'	 ");
?>
      <script>
        alert('You Registered Successfully, Login now');
      </script>
<?php
header("location:login.php");
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

    <script>
        $(document).ready(function () {
           
            $("#si").validate({
                messages: {
                    firstname: {
                        required: "Cannot be empty" 
                    },
                    lastname: {
                        required: "Cannot be empty"   
                    },
                    username: {
                        required: "Enter username"   
                    },
                    mail: {
                        required: "Cannot be empty"   
                    },
                    phone: {
                        required: "Cannot be empty",
                    },
                    pwd: {
                        required: "Cannot be empty"   
                    },
                    pass: {
                        required: "Cannot be empty"   
                    },
                }

            });

        });
    </script>

<script type="text/javascript">
        function Validate() {
            var password = document.getElementById("pwd").value;
            var confirmPassword = document.getElementById("pass").value;
            if (password != confirmPassword) {
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<section id="book-a-table" class="book-a-table">
      <div class="container">

        <div class="section-title">
          <h2>ACCOUNT</h2>
          <p>SIGN UP</p>
        </div>

        <form action="sign.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id=si>
          <div class="row">
            
              <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your  FirstName" required>
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Your LastName" required>
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="text" name="username" class="form-control" id="username" placeholder="Your UserName" required>
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="email" class="form-control" name="mail" id="mail" placeholder="Your Email" required>
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required 
              oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
              <div class="validate"></div>
            </div>
            <br>
            <div class="row">
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Re enter password" required>
              <div class="validate"></div>
            </div>
            <br>
            
          <div class="text-center"><button type="submit" name="submit"  onclick="return Validate()">SIGN  UP</button></div><center><font size=4px>OR</font></center>
         </form>

    <form name=log action="login.php" class="php-email-form" >
          <div class="text-center"><button type="submit">LOG IN </button></div>
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
   
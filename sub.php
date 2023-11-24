 <?php   
include("connect.php");
 
 if(isset($_POST['det'])) {
    
        $query = mysqli_query($conn,
        "INSERT INTO bookdet SET date='"
        . $_POST["ate"] . "' ,name='"
        . $_POST["name"] . "' ,num ='"
        . $_POST["num"]. "'	 ");
    }
    ?>
    <script>
  alert("Admin work done");
  </script>
  <?php
    header("location:index.html");
        exit();
   
?>
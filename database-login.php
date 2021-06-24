<?php
session_start();
$_SESSION['user']=$_POST['userid'];
 ?>
<?php
include 'connect.php';
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$id= $_POST['userid'];
$email= $_POST['email'];
$pass= $_POST['pass'];

$sql="SELECT user_id from admin where
user_id='$id' AND email='$email' AND password='$pass'";
$res=$conn->query($sql);

if($res->num_rows > 0)
{
  ?>
  <script>
  alert("SUCCESSFULLY LOGIN !!! \r\nWELCOME BACK!!!") ;
  </script>
<?php
header("refresh:1; url=creation.php") ;
}
else {
  ?>
  <script>
    alert("INVALID Login-DETAILS");
  </script>

  <?php
   header("refresh:1; url=loginin.php") ;
   }
   ?>

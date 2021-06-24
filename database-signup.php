<?php
include 'connect.php';
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$userid= $_POST['userid'];
$fname=$_POST['first'];
$surname=$_POST['sur'];
$email=$_POST['email'];
$pass1=$_POST['password'];
$pass2=$_POST['confirm'];


$dup = "SELECT user_id FROM admin WHERE  user_id = '$userid'";
$res=$conn->query($dup);


if($res->num_rows > 0)
{
?>
<script>
  alert("Userid already exists in database. ");
</script>
  <?php
  header("refresh:1; url=loginin.php");
}
else
{
  if($pass1 == $pass2)
    {
      $sql="INSERT into admin(user_id,f_name,s_name,email,password) values('$userid','$fname','$surname','$email','$pass1')";
      $insert=$conn->query($sql);
      ?>
      <script>
      alert("Successfully REGISTERED!! \r\nWELCOME TO ONLINE-CV-BUILDER FAMILY!! ");
      </script>

      <?php
      header("refresh:1; url=loginin.php");
    }
  else{
    ?>

    <script>
      alert("CHECK DETAILS AGAIN.");
    </script>
    <?php
    header("refresh:1; url=SignUp.php");
    }
}
     ?>

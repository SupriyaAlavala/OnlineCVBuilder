<?php
include 'connect.php';
// check connection
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}


$user=$_POST['userid'];
$messg=$_POST['messg'];


$sql="INSERT into contact(user,messg) values('$user','$messg') ";

if($conn->query($sql)== True)
{
?>
<script>
  alert("MESSAGE Registered.");
</script>

  <?php
header("refresh:1; url=index.php");
}
else
{
   ?>
  <script >
    alert("ERROR: Message not Registered.");
  </script>
  <?php
  header("refresh:1; url=contact.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include 'connect.php';
    $conn = new mysqli("localhost", "root", "", "cv-builder");
    if ($conn->connect_errno) {
        echo "Failed to connect to MySQL: " . $conn->connect_error;
        exit();
    }

    $id= $_POST['userid'];

    $sql="SELECT resume_id from person where
    resume_id='$id'";
    $res=$conn->query($sql);
    $name="supriya";

    if($res->num_rows > 0)
    {
      $sql2="DELETE  from person where resume_id='$id'";
      if($conn->query($sql2)==True)
      {
      ?>
      <script type="text/javascript">
        alert("SUCCESSFULLY DELETED.");
      </script>

      <?php
      header("refresh:2; url=creation.php");
      }
      else {
      ?>
        <script type="text/javascript">
          alert("ERROR")
        </script>

      <?php
        header("refresh:2; url=delete.php");
      }
    }
    else
    {
    ?>
    <script type="text/javascript">
      alert("INVALID RESUME ID.");
    </script>
    <?php
      header("refresh:1; url=delete.php");
    }
       ?>
  </body>
</html>

<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cv-builder";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno)
{
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$id=$_POST['id'];
$sql1="SELECT * FROM person where resume_id='$id'";
$res1=$conn->query($sql1);
if($res1->num_rows >0)
{
  $actc=$_POST['actc'];
  $actd=$_POST['actd'];

  if($actc==NULL && $actd==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-extra_activities.");
    </script>
    <?php

  }
  else
  {
    $sql2="SELECT * from extra_activities where a_id='$id'";
    $res2=$conn->query($sql2);
    if($res2->num_rows >0)
    {
      while($row=$res2->fetch_assoc())
      {
        if($row['activity_category'] == $actc)
        {
          $d0="DELETE from extra_activities where activity_category='$actc' and a_id='$id'";
          $exed=$conn->query($d0);
          break;
        }
      }
        $in0="INSERT into extra_activities(a_id,activity_category,activity_details)
        values('$id','$actc','$actd') ";
        $ine0=$conn->query($in0);
    }
    else
    {
      $in2="INSERT into extra_activities(a_id,activity_category,activity_details)
      values('$id','$actc','$actd') ";
      $ine2=$conn->query($in2);

    }
    ?>
    <script>
      alert("UPDATED SUCCESSFULLY!!");
    </script>
    <?php
    header("refresh:1;url=../creation.php");
  }
  header("refresh:1;url=../update.php");
}
else
{
  ?>
  <script>
    alert("RESUME doesnt exist, so create the resume.")
  </script>
  <?php
  header("refresh:1;url=../creation.php");
}


 ?>

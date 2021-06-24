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
  $cer=$_POST['cer'];
  $award=$_POST['award'];

  $sql2="SELECT * from achievments where a_id='$id'";
  $res2=$conn->query($sql2);

  if($cer==NULL && $award==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-ACHIEVEMENTS.");
    </script>
    <?php
  }
  else
  {
    if($res2->num_rows >0)
    {
      $fet2=$res2->fetch_assoc();
      if(($fet2['certificate']==$cer) || $cer==NULL)
      {

      }
      else
      {
        if($cer!=NULL)
        {
          $u0="UPDATE achievments set certificate='$cer' where a_id='$id' ";
          $y0=$conn->query($u0);

        }
      }
      if(($fet2['award']==$award) || $award==NULL)
      {

      }
      else
      {
        if($award!=NULL)
        {
          $u1="UPDATE achievments set award='$award' where a_id='$id' ";
          $y1=$conn->query($u1);

        }
      }
    }
    else
    {
      $in="INSERT into achievments(a_id,certificate,award) values('$id','$cer','$award') ";
      $ine=$conn->query($in);
    }
    ?>
    <script>
      alert("UPDATED SUCCESSFULLY!!");
    </script>
    <?php
    header("refresh:1;url=../update.php");
  }
    header("refresh:1; url=../update.php");
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

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
  $pno=$_POST['pno'];
  $pname=$_POST['name'];
  $prod=$_POST['desc'];

  if($pno==NULL && $pname==NULL && $prod==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-projects.");
    </script>
    <?php
  }
  else
  {
    $sql2="SELECT * from project where a_id='$id'";
    $res2=$conn->query($sql2);
    if($res2->num_rows >0)
    {
      while($row=$res2->fetch_assoc())
      {
        if(($row['project_name'] == $pname) && ($row[p_no]==$pno))
        {
          $d0="DELETE from project where p_no='$pno' and project_name='$pname' and a_id='$id'";
          $exed=$conn->query($d0);
          break;
        }
      }
        $in0="INSERT into project(a_id,p_no,project_name,project_description)
        values('$id','$pno','$pname','$prod') ";
        $ine0=$conn->query($in0);
    }
    else
    {
      $in2="INSERT into project(a_id,p_no,project_name,project_description)
      values('$id','$pno','$pname','$prod') ";
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

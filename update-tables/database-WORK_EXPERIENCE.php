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
  $company=$_POST['com'];
  $rolen=$_POST['role'];
  $roled=$_POST['desc'];
  $start=$_POST['wstart'];
  $end=$_POST['wend'];

  if($company==NULL && $rolen==NULL && $roled==NULL && $start==NULL && $end==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-work_experience.");
    </script>
    <?php
  }
  else
  {
    $sql2="SELECT * from work_experience where w_id='$id'";
    $res2=$conn->query($sql2);
    if($res2->num_rows >0)
    {
      while($row=$res2->fetch_assoc())
      {
        if(($row['company'] == $company) && ($row['role_name'] == $rolen))
        {
          $d0="DELETE from work_experience where company='$company' and role_name='$rolen' and w_id='$id'";
          $exed=$conn->query($d0);
          break;
        }
      }
        $in0="INSERT into work_experience(w_id,company,role_name,role_description,start_year,end_year)
        values('$id','$company','$rolen','$roled','$start','$end') ";
        $ine0=$conn->query($in0);

    }
    else
    {
      $in1="INSERT into work_experience(w_id,company,role_name,role_description,start_year,end_year)
      values('$id','$company','$rolen','$roled','$start','$end') ";
      $ine1=$conn->query($in1);
    
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

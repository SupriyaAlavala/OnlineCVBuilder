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
  $degree=$_POST['degree'];
  $iname=$_POST['name'];
  $iaddress=$_POST['iaddress'];
  $start=$_POST['estart'];
  $end=$_POST['eend'];
  $cgpa=$_POST['cgpa'];

  if($degree==NULL && $iname==NULL && $iaddress==NULL && $start==NULL && $end==NULL && $cgpa==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-education.");
    </script>
    <?php

  }
  else
  {
    $sql2="SELECT * from education where id='$id'";
    $res2=$conn->query($sql2);
    if($res2->num_rows >0)
    {
      while($row=$res2->fetch_assoc())
      {
        if($row['grade'] == $degree)
        {
          $d0="DELETE from education where grade='$degree' and id='$id'";
          $exed=$conn->query($d0);
          break;
        }
      }
        $in0="INSERT into education(id,grade,insti_name,insti_address,start_year,end_year,percentage)
         values('$id','$degree','$iname','$iaddress','$start','$end','$cgpa') ";
        $ine0=$conn->query($in0);


    }
    else
    {
      $in2="INSERT into education(id,grade,insti_name,insti_address,start_year,end_year,percentage)
       values('$id','$degree','$iname','$iaddress','$start','$end','$cgpa') ";
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

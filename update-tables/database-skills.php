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
  $lang=$_POST['lang'];
  $soft=$_POST['soft'];
  $tech=$_POST['tech'];
  $course=$_POST['course'];

  $sql2="SELECT * from skills where s_id='$id'";
  $res2=$conn->query($sql2);

  if($lang==NULL && $soft==NULL && $tech==NULL && $course==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-Skills.");
    </script>
    <?php
  }
  else
  {
    if($res2->num_rows >0)
    {
      $fet2=$res2->fetch_assoc();
      if(($fet2['lang_names']== $lang) || $lang==NULL)
      {

      }
      else
      {
        if($lang!=NULL)
        {
          $u1="UPDATE skills set lang_names='$lang' where s_id='$id'";
          $y1=$conn->query($u1);

        }
      }
      if(($fet2['soft_skills']== $soft) || $soft==NULL)
      {

      }
      else
      {
        if($soft!=NULL)
        {
          $u2="UPDATE skills set soft_skills='$soft' where s_id='$id'";
          $y2=$conn->query($u2);

        }
      }
      if(($fet2['technical_skills']== $tech) || $tech==NULL)
      {

      }
      else
      {
        if($tech !=NULL)
        {
          $u3="UPDATE skills set technical_skills='$tech' where s_id='$id'";
          $y3=$conn->query($u3);

        }
      }
      if(($fet2['courses']== $course) || $course==NULL)
      {

      }
      else
      {
        if($course!=NULL)
        {
          $u4="UPDATE skills set courses='$course' where s_id='$id'";
          $y4=$conn->query($u4);

        }
      }
    }
    else
    {
      $in="INSERT into skills(s_id,lang_names,soft_skills,technical_skills,courses)
      values('$id','$lang','$soft','$tech','$course')";
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

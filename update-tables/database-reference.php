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
  $blog=$_POST['blog'];
  $link=$_POST['link'];
  $twit=$_POST['twit'];
  $git=$_POST['git'];
  $add=$_POST['add'];

  $sql2="SELECT * from refer where r_id='$id'";
  $res2=$conn->query($sql2);

  if($blog==NULL && $link==NULL && $twit==NULL && $git==NULL && $add==NULL)
  {
    ?>
    <script>
      alert("INVALID FORM VALUES-references.");
    </script>
    <?php
  }
  else
  {
    if($res2->num_rows >0)
    {
      $fet2=$res2->fetch_assoc();
      if(($fet2['blog']==$blog) || $blog==NULL)
      {
        //nothing
      }
      else
      {
          if($blog!=NULL)
          {
            $u0="UPDATE refer set blog='$blog' where r_id='$id'";
            $y0=$conn->query($u0);

          }
      }
      if(($fet2['link']==$link) || $link==NULL)
      {
      }
      else
      {
          if($link!=NULL)
          {
            $u1="UPDATE refer set link='$link' where r_id='$id'";
            $y1=$conn->query($u1);
          }
      }
      if(($fet2['twit']==$twit) || $twit==NULL)
      {

      }
      else
      {
          if($twit!=NULL)
          {
            $u2="UPDATE refer set twit='$twit' where r_id='$id'";
            $y2=$conn->query($u2);

          }
      }
      if(($fet2['github']==$git) || $git==NULL)
      {

      }
      else
      {
          if($git!=NULL)
          {
            $u3="UPDATE refer set github='$git' where r_id='$id'";
            $y3=$conn->query($u3);

          }
      }
      if(($fet2['other']==$add) || $add==NULL)
      {

      }
      else
      {
          if($add!=NULL)
          {
            $u4="UPDATE refer set other='$add' where r_id='$id'";
            $y4=$conn->query($u4);

          }
      }
    }
    else
    {
      $in="INSERT into refer(r_id,blog,link,twit,github,other) values('$id','$blog','$link','$twit','$git','$add') ";
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

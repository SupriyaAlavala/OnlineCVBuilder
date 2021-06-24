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
$fname=$_POST['first'];
$mname=$_POST['middle'];
$surname=$_POST['sur'];
$address=$_POST['address'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$objective=$_POST['objective'];
$dob=$_POST['dob'];
$nat=$_POST['nationality'];
$about=$_POST['about'];

$sql1="SELECT * FROM person where resume_id='$id'";
$res1=$conn->query($sql1);
if($res1->num_rows > 0)
{
  //image
  if(isset($_POST['upload']))
  {
    $s="SELECT * from image where id='$id'";
    $exe=$conn->query($s);
    if($exe->num_rows >0)
    {
      $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "../uploads/".$filename;
      $row=$exe->fetch_assoc();
      if(($row['filename']==$filename) || $filename==NULL)
      {
        ?>


        <?php
      }
      else
      {
        // Get all the submitted data from the form
        $sql0 = "UPDATE image set filename='$filename' where id='$id'";

        // Execute query
        mysqli_query($conn, $sql0);

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))
        {
          ?>

          <?php
        }else
        {
        }
      }
    }
    else
    {
      $filename = $_FILES["uploadfile"]["name"];
      $tempname = $_FILES["uploadfile"]["tmp_name"];
      $folder = "../uploads/".$filename;
      // Get all the submitted data from the form
      $sql0 = "INSERT INTO image (id,filename) VALUES ('$id','$filename')";

      // Execute query
      mysqli_query($conn, $sql0);

      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname, $folder))
      {
        ?>

        <?php
      }else
      {
      }
    }

  }


  //signature
  if(isset($_POST['upload']))
  {
    $s1="SELECT * from sign where id='$id'";
    $exe1=$conn->query($s1);
    if($exe1->num_rows >0)
    {
      $filename1 = $_FILES["uploadsign"]["name"];
      $tempname1 = $_FILES["uploadsign"]["tmp_name"];
      $folder1 = "../signs/".$filename1;
      $row1=$exe1->fetch_assoc();
      if(($row1['filename']==$filename1) || $filename1==NULL)
      {
        ?>


        <?php
      }
      else
      {
        // Get all the submitted data from the form
        $sq0 = "UPDATE sign set filename='$filename1' where id='$id'";

        // Execute query
        mysqli_query($conn, $sq0);

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname1, $folder1))
        {
          ?>

          <?php
        }else
        {
        }
      }
    }
    else
    {
      $filename1 = $_FILES["uploadsign"]["name"];
      $tempname1 = $_FILES["uploadsign"]["tmp_name"];
      $folder1 = "../signs/".$filename1;
      // Get all the submitted data from the form
      $sq0 = "INSERT INTO sign (id,filename) VALUES ('$id','$filename1')";

      // Execute query
      mysqli_query($conn, $sq0);

      // Now let's move the uploaded image into the folder: image
      if (move_uploaded_file($tempname1, $folder1))
      {
        ?>
        
        <?php
      }else
      {
      }
    }

  }



   // person
  if( $fname==NULL && $mname==NULL && $surname==NULL && $address==NULL && $email==NULL && $phno==NULL && $objective==NULL)
  {

  }
  else
  {
    $fet1=$res1->fetch_assoc();
    if(($fet1['f_name'] == $fname) || $fname==NULL)
    {
    }
    else
    {
      if($fname != NULL)
      {
        $u0="UPDATE person set f_name='$fname' where resume_id='$id'";
        $y0=$conn->query($u0);
      }
    }
    if(($fet1['m_name']==$mname) || $mname==NULL)
    {

    }
    else
    {
        if($mname!=NULL)
        {
          $u1="UPDATE person set m_name='$mname' where resume_id='$id'";
          $y1=$conn->query($u1);

        }

    }
    if(($fet1['s_name']==$surname) || $surname==NULL)
    {

    }
    else
    {
       if($surname != NULL)
       {
         $u2="UPDATE person set s_name='$surname' where resume_id='$id'";
         $y2=$conn->query($u2);

       }
    }
    if(($fet1['address']==$address) || $address==NULL)
    {

    }
    else
    {
      if($address!=NULL)
      {
        $u3="UPDATE person set address='$address' where resume_id='$id'";
        $y3=$conn->query($u3);

      }

    }
    if(($fet1['ph_no'] == $phno) || $phno == NULL)
    {

    }
    else
    {
          $u4="UPDATE person set ph_no ='$phno' where resume_id='$id'";
          $y4=$conn->query($u4);
    }
    if(($fet1['email']==$email) || $email==NULL)
    {

    }
    else
    {
      if($email!=NULL)
      {
        $u5="UPDATE person set email='$email' where resume_id='$id'";
        $y5=$conn->query($u5);

      }
    }
    if( ($fet1['objective']==$objective) || $objective==NULL)
    {
    }
    else
    {
      if($objective!=NULL)
      {
        $u6="UPDATE person set objective='$objective' where resume_id='$id'";
        $y6=$conn->query($u6);

      }

    }
  }



    //personel_details
  $sql2="SELECT * from personel_details where ID='$id'";
  $res2=$conn->query($sql2);
  if($dob==NULL && $nat==NULL && $about==NULL)
  {
  }
  else
  {
      if($res2->num_rows >0)                         //if already exsists then updates changed values.
      {
          $fet2=$res2->fetch_assoc();
          if(($fet2['dob']==$dob) || $dob==NULL)
          {
          }
          else
          {
            $u7="UPDATE personel_details set dob='$dob' where ID='$id'";
            $y7=$conn->query($u7);
          }
          if(($fet2['nationality']==$nat) || $nat==NULL)
          {
          }
          else
          {
            $u8="UPDATE personel_details set nationality='$nat' where ID='$id'";
            $y8=$conn->query($u8);
          }
          $sex=$_POST['gen'];
          if(($fet2['sex']==$sex) || $sex==NULL)
          {
          }
          else
          {
            $u9="UPDATE personel_details set sex='$sex' where ID='$id'";
            $y9=$conn->query($u9);

          }
          if(($fet2['about']==$about) || $about==NULL)
          {

          }
          else
          {

            $u10="UPDATE personel_details set about='$about' where ID='$id'";
            $y10=$conn->query($u10);

          }
      }
      else
      {
        $sex=$_POST['gen'];
        $in="INSERT into personel_details(ID,dob,nationality,sex,about)
        values('$id','$dob','$nat','$sex','$about')";
        $ine=$conn->query($in);

      }
  }
  ?>
  <script>
    alert("UPDATED SUCCESSFULLY!!");
  </script>
  <?php
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

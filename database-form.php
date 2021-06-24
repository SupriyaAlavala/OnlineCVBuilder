
<?php
error_reporting(0);
?>
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
// check connection
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno)
{
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$userid=$_POST['userid'];
$id= $_POST['resume'];


$exe1="SELECT resume_id from person where resume_id='$id'";
$u="SELECT resume_id from person where user_id='$userid'";



$r1=$conn->query($exe1);
$y1=$conn->query($u);

if(($r1->num_rows >0) || ($y1->num_rows >0))
{
   ?>
   <script>
   alert("Resume already created for this user, but you can update the same.")
   </script>
   <?php
   header("refresh:1,url=update.php");
   exit();
}
else
{

  // peron-table
  $fname=$_POST['first'];
  $mname=$_POST['middle'];
  $surname=$_POST['sur'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $phno=$_POST['phno'];
  $objective=$_POST['objective'];

  if($fname==NULL && $mname==NULL && $surname==NULL && $address==NULL && $email==NULL && $phno==NULL && $objective==NULL )
  {

  }
  else
  {
    $sql1="INSERT into person(user_id,resume_id,f_name,m_name,s_name,address,email,ph_no,objective)
    values('$userid','$id','$fname','$mname','$surname','$address','$email','$phno','$objective')";
    if($conn->query($sql1)== True)
    {
    ?>

       <?php
     }
     else
    {
        ?>
       <script >
         alert("ERROR: In Personal.");
       </script>
     <?php
       header("refresh:1,url=form.php");
    }
  }
  //image
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "uploads/".$filename;
        // Get all the submitted data from the form
        $sql0 = "INSERT INTO image (id,filename) VALUES ('$id','$filename')";
        if($filename==NULL)
        {

        }
        else
        {
          // Execute query
          mysqli_query($conn, $sql0);
          // Now let's move the uploaded image into the folder: image
          if (move_uploaded_file($tempname, $folder))
          {

          }
        }



  //signature
  $signname = $_FILES["uploadsign"]["name"];
  $temp = $_FILES["uploadsign"]["tmp_name"];
  $folder1 = "signs/".$signname;
  // Get all the submitted data from the form
  $s = "INSERT INTO sign (id,filename) VALUES ('$id','$signname')";
  if($signname==NULL)
  {

  }
  else
  {
    // Execute query
    mysqli_query($conn, $s);
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($temp, $folder1))
    {

    }
  }



  // peronel-details-table
  $dob=$_POST['dob'];
  $nat=$_POST['nationality'];
  $sex=$_POST['gen'];
  $about=$_POST['about'];

  if($dob==NULL && $nat==NULL && $sex==NULL && $about==NULL)
  {
  }
  else
  {
    $sql2="INSERT into personel_details(ID,dob,nationality,sex,about)
    values('$id','$dob','$nat','$sex','$about')";
    if($conn->query($sql2)== True)
    {

    }
    else
    {
      ?>
      <script >
        alert("ERROR:In personal-details.");
      </script>
      <?php
      header("refresh:1,url=form.php");
    }
  }

 // education
 $degree=$_POST['degree'];
 $iname=$_POST['iname'];
 $iaddress=$_POST['iaddress'];
 $start=$_POST['estart'];
 $end=$_POST['eend'];
 $cgpa=$_POST['cgpa'];

 if($degree==NULL && $iname==NULL && $iaddress==NULL && $start==NULL && $end==NULL && $cgpa==NULL)
 {

  }
  else
  {
    $sql3="INSERT into education(id,grade,insti_name,insti_address,start_year,end_year,percentage) values('$id','$degree','$iname','$iaddress','$start','$end','$cgpa') ";

    if($conn->query($sql3)== True)
    {

    }
    else
    {
      ?>
      <script >
        alert("ERROR: In Education.");
      </script>
      <?php
      header("refresh:1,url=form.php");
    }
  }


  // work_experience table

  $company=$_POST['com'];
  $rolen=$_POST['role'];
  $roled=$_POST['desc'];
  $start=$_POST['wstart'];
  $end=$_POST['wend'];

  if($company==NULL && $rolen==NULL && $roled==NULL && $start==NULL && $end==NULL)
  {

  }
  else
  {
    $sql4="INSERT into work_experience(w_id,company,role_name,role_description,start_year,end_year) values('$id','$company','$rolen','$roled','$start','$end') ";

    if($conn->query($sql4)== True)
    {

    }
    else
    {
      ?>
      <script >
        alert("ERROR: In WORK_EXPERIENCE.");
      </script>

      <?php
      header("refresh:1,url=form.php");
    }
  }



  // skills
  $lang=$_POST['lang'];
  $soft=$_POST['soft'];
  $tech=$_POST['tech'];
  $course=$_POST['course'];

  if($lang==NULL && $soft==NULL && $tech==NULL && $course==NULL)
  {
  }
  else
  {
    $sql5="INSERT into skills(s_id,lang_names,soft_skills,technical_skills,courses) values('$id','$lang','$soft','$tech','$course')";
    if($conn->query($sql5)== True)
    {

    }
    else
    {
      ?>
      <script >
        alert("ERROR: In skills.");
        </script>
      <?php
     header("refresh:1,url=form.php");
    }
  }


  // extra-activities
  $actc=$_POST['actc'];
  $actd=$_POST['actd'];
  if($actc==NULL && $actd==NULL)
  {

  }
  else
  {
      $sql6="INSERT into extra_activities(a_id,activity_category,activity_details)
      values('$id','$actc','$actd') ";

      if($conn->query($sql6) == True)
      {

      }
      else
      {
        ?>

        <script >
        alert("ERROR: In extra_activities.");
        </script>

        <?php
        header("refresh:1,url=form.php");
      }
  }


  // ACHIEVEMENTS
  $cer=$_POST['cer'];
  $award=$_POST['award'];

  if($cer==NULL && $award==NULL)
  {

  }
  else
  {
      $sql7="INSERT into achievments(a_id,certificate,award) values('$id','$cer','$award') ";
      if($conn->query($sql7)== True)
      {

      }
      else
      {
        ?>
        <script >
        alert("ERROR: In Achievements");
        </script>
        <?php
        header("refresh:1,url=form.php");
      }
  }


    //PROJECTS
    $pno=$_POST['pno'];
    $pname=$_POST['name'];
    $prod=$_POST['desc'];

    if($pno==NULL && $pname==NULL && $prod==NULL)
    {

    }
    else
    {
        $sql8="INSERT into project(a_id,p_no,project_name,project_description)
        values('$id','$pno','$pname','$prod') ";

        if($conn->query($sql8)== True)
        {

        }
        else
        {
          ?>
          <script >
          alert("ERROR: In project.");
          </script>
          <?php
          header("refresh:1,url=form.php");
        }
    }


    // references
    $blog=$_POST['blog'];
    $link=$_POST['link'];
    $twit=$_POST['twit'];
    $git=$_POST['git'];
    $add=$_POST['add'];

    if($blog==NULL && $link==NULL && $twit==NULL && $git==NULL && $add==NULL)
    {

    }
    else
    {
      $sql9="INSERT into refer(r_id,blog,link,twit,github,other) values('$id','$blog','$link','$twit','$git','$add') ";
      if($conn->query($sql9)== True)
      {

      }
      else
      {
        ?>
        <script >
        alert("ERROR: In Refrenences.");
        </script>
          <?php
          header("refresh:1,url=form.php");
      }
    }
    ?>
    <script>
      alert("RESUME CREATED SUCCESSFULLY!!");
    </script>
    <?php
  header("refresh:1,url=creation.php");
}//main-else
   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="images/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
  body{
    background-color: #EBFFFB;
    font-family: 'Merriweather', serif;
  }
  .navbar{
    display: fixed;
  }
hr{
  margin:0;
  width: 100%;
}
h1{
  margin-top: 15px;
  text-align: center;
  color: green;
  margin-bottom: 40px;
  font-weight: bold;
}
.mb-4{
  height: 120px;
  background-color: #EBFFFB;
  margin-left: 45%;
  margin-top: 40px;
  margin-bottom: 40px;
}
.col1{
  background-color: #e4e3e3;
  margin: auto;
  margin-top: 70px;
  margin-bottom: 30px;
  padding-bottom: 30px;
}
.col2{
background-color: #e4e3e3;
margin: auto;
margin-top: 70px;
padding-bottom: 30px;
padding-left: 0;
padding-right: 0;
}
.col3{
  background-color: #e4e3e3;
  margin: auto;
  margin-top: 70px;
  padding-bottom: 30px;
}
.form-group label {
  display: block;
  margin-left:10px;
 font-size: 22px;
 font-weight: bolder;
 text-align: center;
}
.form-group input,
.form-group textarea {
display: inline;
 width: 20%;
 padding: 7px;
 border: grey 2px solid;
 border-radius: 8px;
}
h3{
  margin-top:40px;
  margin-bottom: 40px;
  margin-left: 20PX;
  font-size: 38px;
  color: #344a72;
  text-align: center;
}
.form-group1 label {
 margin:auto;
 margin-left: 25%;
 font-size: 20px;
 font-weight: bolder;
 padding:12px;
}
.form-group1 input,
.form-group1 textarea {
 display: block;
 width: 100%;
 padding: 5px;
 border: grey 1px solid;
 border-radius: 8px;
 margin: auto;
}
#but {
   width:35%;
   background-color: #49c1a2;
   padding: 15px;
   display: block;
   margin: auto;
   margin-top: 50px;
   color: white;
   cursor: pointer;
   border: #ddd 1px solid;
   border-radius: 10px;
   font-size: 30px;
   font-weight: bolder;
   margin-bottom: 50px;
 }
#but:hover {
   background-color: #37a08e;
   color:white;
 }
 #lab{
 padding-left: 28%;
 margin-bottom: 10px;
 font-size: 18px;
 font-weight: bolder;
 }
 #sex{
   margin-right: 10px;
 }
 .white{
   background-color:#EBFFFB ;
   width: 100%;
 }
 h4{
 text-align: center;
padding-top: 20px;
padding-bottom: 80px;
 }
 h5{
   text-align: center;
 padding-top: 50px;
 }
 .abc{
   text-decoration: underline;
   color:black;
   padding-bottom: 50px;
 }

 #upload{
margin: auto;
margin-left: 45%;
 }
 #imgp{
   color: orange;
   font-size: 25px;
   font-weight: bold;
   text-align: center;
   margin-top: 70px;
 }
 #foot{
   text-align: center;
   font-size: 20px;
   width:68%;
   margin:auto;
   margin-bottom: 70px;
 }
  </style>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
        <span style="font-size:23px; font-weight: bold">Online CV Builder</span>
      </a>
      <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
       <a class="nav-link" href="index.php" style="color:black">HOME</a>
       <a class="nav-link" href="creation.php" style="color:black; margin-right: 20px">BUILD-CV</a>
      </form>
    </nav>
    <hr>
    <img class="mb-4" src="images/cv.png" alt="icon">
    <h1> RESUME-DETAILS</h1>
    <form class="" action="database-form.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="inputresume" > User_ID:
          <input type="text" name="userid" id="inputresume" maxlength="10" required >
        </label>
      </div>
      <div class="form-group">
        <label for="inputresume" > Resume_ID:
          <input type="text" name="resume" id="inputresume" maxlength="10" required >
        </label>
      </div>
      <div class="perimg">
      <p id="imgp">Upload your image here:</p>
        <input id="upload" type="file" name="uploadfile" value="" >
      </div>
      <div class="perimg">
      <p id="imgp">Upload your Signature here:</p>
        <input id="upload" type="file" name="uploadsign" value="" >
      </div>
      <div class="row">
        <div class="col1 col-lg-4">
          <h3>PERSONAL</h3>
          <div class="form-group1">
            <label for="inputfirstname"> First Name:
              <input type="text" name="first" id="inputfirstname" maxlength="20" required>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputmiddlename"> Middle Name:
              <input type="text" name="middle" id="inputmiddlename" maxlength="20" >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputsurname"> Surname Name:
              <input type="text" name="sur" id="inputmiddlename" required>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputaddress">Address:
              <textarea  name="address" id="inputaddress" rows="3" required></textarea>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputno">Phone Number:
              <input type="text" name="phno" id="inputno" maxlength="10" required>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputEmail">Email Address:
              <input type="email" name="email" id="inputEmail"  pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2, 50}[.]{1}[a-zA-Z]{2,}" required>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputobjective">Objective:
              <textarea  name="objective" id="inputobjective" rows="5" ></textarea>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputno">Date_Of_Birth:
              <input type="date" name="dob" id="inputno" class="form-control"  >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputno">Nationality:
              <input type="text" name="nationality" id="inputno" class="form-control"  maxlength="10" >
            </label>
          </div>
          <br>
            <label id="lab" for="inputsex">Sex: <br>
            <input id="sex" type="radio" name="gen" value="m" >Male
            <input id="sex" type="radio" name="gen" value="f">Female
            <input id="sex" type="radio" name="gen" value="o">Others
            </label>
          <br>
          <div class="form-group1">
            <label for="inputobjective">About:
              <textarea class="form-control" name="about" id="inputobjective" rows="10" cols="25" ></textarea>
            </label>
          </div>
        </div>
        <div class="col2 col-lg-4">
            <h3>EDUCATION</h3>
            <div class="form-group1">
              <label for="inputdegree">Degree_Or_Grade:
                <input type="text" name="degree" id="inputdegree" >
              </label>
            </div>
            <div class="form-group1">
              <label for="inputname"> Institution_Name:
                <input type="text" name="iname" id="inputname" >
              </label>
            </div>
            <div class="form-group1">
              <label for="inputaddress"> Institution_Address:
                <input type="text" name="iaddress" id="inputaddress" >
              </label>
            </div>
            <div class="form-group1">
              <label for="inputstart"> Start_Year:
                <input type="text" name="estart" id="inputstart" maxlength="4">
              </label>
            </div>
            <div class="form-group1">
              <label for="inputend"> End_Year:
                <input type="text" name="eend" id="inputend" maxlength="4">
              </label>
            </div>
            <div class="form-group1">
              <label for="inputcgpa">CGPA/Percentage:
                <input type="text" name="cgpa" id="inputcgpa">
              </label>
              <br>
              <br>
            </div>
            <hr>
           <div class="white">
             <br>
             <br>
             <br>
             <br>
           </div>
           <hr>
           <h3>WORK_EXPERIENCE</h3>
           <div class="form-group1">
             <label for="inputCOM"> COMPANY:
               <input type="text" name="com" id="inputCOM"  >
             </label>
           </div>
           <div class="form-group1">
             <label for="inputrole"> ROLE_NAME/DESIGNATION:
               <input type="text" name="role" id="inputrole" >
             </label>
           </div>
           <div class="form-group1">
             <label for="inputdesc"> ROLE/DESIGNATION DESCRIPTION:
               <textarea type="text" name="desc" id="inputdesc" rows="5" cols="5"></textarea>
             </label>
           </div>
           <div class="form-group1">
             <label for="inputstart"> START_YEAR:
               <input type="text" name="wstart" id="inputstart" maxlength="4">
             </label>
           </div>
           <div class="form-group1">
             <label for="inputend"> END_YEAR:
               <input type="text" name="wend" id="inputend" maxlength="4" >
             </label>
             <br>
             <br>
           </div>
        </div>
      </div>
      <div class="row">
        <div class="col1 col-lg-4">
          <h3>SKILLS and EXTRA_ACTIVITIES</h3>
          <div class="form-group1">
            <label for="inputlang"> SPOKEN LANGUAGES:
              <textarea type="text" name="lang" id="inputlang" rows="4" cols="6"></textarea>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputsoft"> SOFT_SKILLS:
              <input type="text" name="soft" id="inputsoft"  >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputtechnical"> TECHNICAL_SKILLS:
              <textarea type="text" name="tech" id="inputtechnical" rows="5"></textarea>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputcourse"> COURSES:
              <textarea type="text" name="course" id="inputcourse" rows="10" cols="25"></textarea>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputACT"> ACTIVITY_CATEGORY:
              <input type="text" name="actc" id="inputACT" >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputACtd"> ACTIVITY_DESCRIPTION:
              <textarea type="text" name="actd" id="inputACTd" rows="6" cols="25 "></textarea>
            </label>

          </div>
        </div>
        <div class="col2 col-lg-4">
          <h3>ACHIEVEMENTS</h3>
          <div class="form-group1">
            <label for="inputCER"> CERTIFICATES:
              <textarea type="text" name="cer" id="inputCER"  rows="6" cols="25 "></textarea>
            </label>
          </div>
          <div class="form-group1">
            <label for="inputawards"> AWARDS:
              <textarea type="text" name="award" id="inputawards" rows="6" cols="25 "></textarea>
            </label>
            <br>
            <br>
          </div>
          <hr>
         <div class="white">
           <br>
           <br>
           <br>
           <br>
         </div>
         <hr>
         <h3>PROJECTS</h3>
         <div class="form-group1">
           <label for="inputpno"> PROJECT_ID:
             <input type="text" name="pno" id="inputpno" >
           </label>
         </div>
         <div class="form-group1">
           <label for="inputpname">PROJECT_TITLE:
             <textarea type="text" name="name" id="inputpname"  rows="6" cols="15"></textarea>
           </label>
         </div>
         <div class="form-group1">
           <label for="inputPDESC"> PROJECT_DESCRIPTION:
             <textarea type="text" name="desc" id="inputPDESC"  rows="8" cols="28"></textarea>
           </label>
         </div>
        </div>
      </div>
      <div class="row">
        <div class="col3 col-lg-5">
          <h3>REFERENCES</h3>
          <div class="form-group1">
            <label for="inputblog"> BLOG_LINK:
              <input type="text" name="blog" id="inputtwit" >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputlink"> LINKEDIN_ID:
              <input type="text" name="link" id="inputtwit" >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputgit"> GITHUB_ID:
              <input type="text" name="git" id="inputtwit" >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputtwit"> TWITTER:
              <input type="text" name="twit" id="inputtwit" >
            </label>
          </div>
          <div class="form-group1">
            <label for="inputadd"> ADDTIONAL_DETAILS:
              <textarea type="text" name="add" id="inputadd" cols="25" rows="5"></textarea>
            </label>
          </div>
        </div>
      </div>




      <button id="but" type="Submit" name="upload">SUBMIT</button>
      <footer id="foot">
          <P>
        WARNING: This form is for new resumes i.e can't insert records into excisting resumes using this form. To UPDATE excisting resume
      <b><a href="update.php" style="text-decoration:underline" target="_parent">CLICK HERE</a>.</b> </P>
      </footer>

    </form>

  </body>
</html>

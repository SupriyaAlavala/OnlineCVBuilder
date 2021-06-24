<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PERSONAL_DETAILS</title>
    <link rel="icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
  <style media="screen">
    body{
      font-family: 'Merriweather', serif;
    }
    hr{
      margin:0;
    }
    h1{
      margin-top: 10px;
      text-align: center;
      color: green;
    }
    .cont{
      margin: auto;
      width: 40%;
      margin-top: 80px;
      padding-top: 30px;
      padding-bottom: 50px;
      background-color: #e4e3e3;
      position: relative;
      font-family: 'Merriweather', serif;

    }

    .mb-4{
      height: 100px;
      background-color: white;
      margin-left: 40%;
      margin-top: 40px;
    }
    .form-group {
       margin-top: 20px;
       padding-left: 180px;
     }
      .form-group label {
       margin:auto;
       margin-right: 30px;
       font-size: 18px;
       font-weight: bolder;
     }
    .form-group input,
    .form-group textarea {
      display: block;
       width: 100%;
       padding: 5px;
       border: #ddd 1px solid;
       border-radius: 8px;
       margin: auto;
     }
     #lab{
     padding-left: 33%;
     margin-bottom: 10px;
     font-size: 18px;
     font-weight: bolder;
     }
     #sex{
       margin-right: 10px;
     }
    #but {
      width:35%;
      background-color: #1b6ca8;
      display: block;
      padding: 10px;
      margin: auto;
      margin-top: 50px;
      color: white;
      cursor: pointer;
      border: 0;
      font-size: 20px;
      font-weight: bolder;
      border-radius: 3px;
    }
    #but:hover {
      background-color: #3d7ea6;
      color:white;
     }
  #foot{
    text-align: center;
    font-size: 20px;
    width:68%;
    margin:auto;
    margin-top: 40px;
    margin-bottom: 70px;
  }
  #upload{
 margin: auto;
 margin-left: 190px;
 margin-bottom: 30px;
  }
  #imgp{
    color: orange;
    margin:auto;
    font-size: 25px;
    font-weight: bold;
    text-align: center;
    margin-top: 40px;
    line-height: 3;
  }
  </style>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="../images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
        <span style="font-size:23px; font-weight: bold">Online CV Builder</span>
      </a>
      <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
       <a class="nav-link" href="../index.php" style="color:black">HOME</a>
       <a class="nav-link" href="../update.php" style="color:black">CATEGORY</a>
       <a class="nav-link" href="../creation.php" style="color:black; margin-right: 20px">BUILD-CV</a>
      </form>
    </nav>
    <hr>


    <h1> PERSONEL- DETAILS</h1>
  <div class="cont">
    <img class="mb-4" src="../images/cv.png" alt="icon">
    <form class="form" action="database-person.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="inputresume"> RESUME_ID:
          <input type="text" name="id" id="inputresume" maxlength="10"  >
        </label>
      </div>
      <div class="">
      <p id="imgp">Upload your image here:</p>
        <input id="upload" type="file" name="uploadfile" value="" >
      </div>
      <div class="">
      <p id="imgp">Upload your Signature here:</p>
        <input id="upload" type="file" name="uploadsign" value="" >
      </div>

      <div class="form-group">
        <label for="inputfirstname"> First Name:
          <input type="text" name="first" id="inputfirstname" >
        </label>
      </div>
      <div class="form-group">
        <label for="inputmiddlename"> Middle Name:
          <input type="text" name="middle" id="inputmiddlename"  >
        </label>
      </div>
      <div class="form-group">
        <label for="inputsurname"> Surname Name:
          <input type="text" name="sur" id="inputmiddlename"  >
        </label>
      </div>
      <div class="form-group">
        <label for="inputaddress">ADDRESS:
          <textarea  name="address" id="inputaddress" rows="3" ></textarea>
        </label>
      </div>
      <div class="form-group">
        <label for="inputno">Phone Number:
          <input type="text" name="phno" id="inputno" maxlength='10' >
        </label>
      </div>
      <div class="form-group">
        <label for="inputEmail">EMAIL Address:
          <input type="email" name="email" id="inputEmail"  pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" >
        </label>
      </div>
      <div class="form-group">
        <label for="inputobjective">OBJECTIVE:
          <textarea  name="objective" id="inputobjective" rows="5"  ></textarea>
        </label>
      </div>
      <div class="form-group">
        <label for="inputno">DATE_OF_BIRTH:
          <input type="date" name="dob" id="inputno" class="form-control" >
        </label>
      </div>
      <div class="form-group">
        <label for="inputno">NATIONALITY:
          <input type="text" name="nationality" id="inputno" class="form-control"  maxlength="10" >
        </label>
      </div>
      <br>
        <label id="lab" for="inputsex">SEX: <br>
        <input id="sex" type="radio" name="gen" value="m">Male
        <input id="sex" type="radio" name="gen" value="f">Female
        <input id="sex" type="radio" name="gen" value="o">Others
        </label>
      <br>
      <div class="form-group">
        <label for="inputobjective">ABOUT:
          <textarea class="form-control" name="about" id="inputobjective" rows="10" cols="25" ></textarea>
        </label>
      </div>

      <!-- submit -->
      <button id="but" type="Submit" name="upload">UPDATE</button>
    </form>
  </div>
  <footer id="foot">
       <span style="color:red">WARNING:</span> Trying to update an already existing record will overwrite the existing values.<br>Duplicate records for this category are not allowed.
  </footer>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CONTACT</title>
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a4f1ec2893.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

</head>
<style>
  body {
    font-family: 'Merriweather', serif;
  }

  #col1 {
    background-color: #e8e8e8;
    text-align: center;
  }

  .h {
    text-align: center;
    padding-top: 40px;
    padding-bottom: 20px;
    font-family: 'Merriweather', serif;
    font-size: 28px;
    font-weight: bold;
    color: red;
  }

  .form-group {
    line-height: 1.5;
    margin-bottom: 40px;
  }

  .form-group label {
    display: block;
    margin-top: 15px;
    font-size: 20px;
  }

  .form-group input {
    width: 50%;
    padding: 4px;
    border: #ddd 1px solid;
    border-radius: 5px;
  }

  #messg {
    padding: 6px;
    border: #ddd 1px solid;
    border-radius: 5px;
  }

  #but {
    width: 25%;
    background-color: #1b6ca8;
    display: block;
    margin: auto;
    color: white;
    cursor: pointer;
    border: 0;
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 20px;
  }

  #but:hover {
    background-color: #3d7ea6;
    color: white;
  }

  #i1 {
    padding-right: 10px;
  }

  #i2 {
    padding-right: 10px;
    padding-bottom: 40px;
  }

  #p1 {
    margin: 20px auto;
    font-weight: bolder;
    font-size: 20px;
    margin-top: 40px;
    margin-bottom: 30px;
  }

  .other {
    padding-bottom: 30px;
  }

  .conimg {
    height: 650px;
  }
</style>

<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <span style="font-size:23px; font-weight: bold">Online CV Builder</span>
    </a>
    <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
      <a class="nav-link" href="index.php" style="color:black; margin-right: 30px">HOME</a>
    </form>
  </nav>

  <div class="row">
    <div id="col1" class="col col-lg-5">
      <p class="h">CONTACT FORM</p>
      <form class="form" action="database-contact.php" method="post">
        <div class="form-group">
          <label for="userid">User_ID</label>
          <input type="text" name="userid" id="userid" maxlength="10" required>
        </div>
        <div class="form-group">
          <label for="messg"> Message</label>
          <textarea type="text" name="messg" id="messg" rows="5" cols="30" required></textarea>
        </div>
        <button id="but" type="submit" class="btn">Submit</button>
      </form>
      <div class="other">
        <p id="p1"> <u> Contact Information</u> </p>
        <i id="i1" class="fa fa-phone-square" aria-hidden="true"></i>PH_NO: 989798989
        <br> <i id="i2" class="fas fa-envelope"></i>EMAIL_ID: online_cv_generator@gmail.com
      </div>
    </div>

    <div id="col2" class="col col-lg-7">
      <img class="conimg" src="images/contact1.jpg" alt="contactimg">
    </div>

  </div>


</body>

</html>

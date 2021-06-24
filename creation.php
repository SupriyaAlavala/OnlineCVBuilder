<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BUILD CV</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a4f1ec2893.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
  <style>
  body{
    font-family: 'Merriweather', serif;
  }
  .block1{
    display: inline-block;
    width: 25%;
    height: 200px;
    text-align: center;
    position: relative;
    margin-top: 80px;
    margin: 100px;
    margin-left: 320px;
    background-color:  #cad315;
    border: 1px solid;
   border-radius: 100%;
   cursor: pointer;
   font-weight: bold;
  }
  .block2{
    display: inline-block;
    width: 25%;
    height: 200px;
    background-color: #ff4b5c;
    text-align: center;
    border:  1px solid;
   border-radius: 100%;
   cursor: pointer;
  font-weight: bold;
  }
  .block3{
    display: inline-block;
    width: 25%;
    height: 200px;
    background-color:   #ffa62b ;
    text-align: center;
    border:  1px solid;
    border-radius: 100%;
    cursor: pointer;
    font-weight: bold;
  }

  .block1 a, .block2 a, .block3 a{
    text-decoration: none;
    color: black;
  }
  .block1:hover {
    background-color: #e4e978;
  }
  .block2:hover{
    background-color: #ed6663;
  }
  .block3:hover{
    background-color:#ffa45b;
  }
p{
font-size: 35px;
font-weight: bold;
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
<a href="form.php"><button class="block1" type="button" name="button"> <p>CREATE CV </p></button></a>
<a href="finalcv.php"> <button class="block3" type="button" name="button"><p>  GENERATE CV </p></button></a>
<a href="update.php"><button class="block1" type="button" name="button" > <p>UPDATE CV </p></button></a>
<a href="delete.php"> <button class="block2" type="button" name="button"><p>DELETE CV </p></button></a>


  </body>
</html>

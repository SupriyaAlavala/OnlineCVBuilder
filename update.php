<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>CATEGORIES</title>
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
</head>
<style>
body{
    font-family: 'Merriweather', serif;
}
hr{
  margin:0;
}
#col{
  background-color: #bedbbb;
  color: red;
  font-size: 26px;
  text-align: center;
  margin: 50px;
  padding: 45px;
  border-radius: 8px;
}

#col2{
  background-color: #bedbbb ;
  text-align: center;
  font-size: 30px;
  padding: 50px;
  margin:auto;
  margin-bottom: 50px;
  color: red;
  border-radius: 8px;
  margin-top: 30px;
}
a{
  text-decoration: none;
  color:red;
}
h4{
text-align: CENTER;

}
h4 a{
 text-decoration: underline;
 color: black;
}
h5 a{
  text-decoration: underline;
  color: black;
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
  <div class="row">
    <div id="col" class="column col-lg-3">
      <a href="update-tables/person.php" target="_parent">PERSONAL_DETAILS</a>
    </div>
    <div id="col" class="COLUMN col-lg-3">
      <a href="update-tables/education.php" target="_parent">EDUCATION</a>
    </div>
    <div id="col" class="column col-lg-3">
      <a href="update-tables/work.php" target="_parent">WORK_EXPERIENCE</a>
    </div>
  </div>
  <div class="row">
    <div id="col" class="column col-lg-3">
      <a href="update-tables/skill.php" target="_parent">SKILLS </a>
    </div>
    <div id="col" class="COLUMN col-lg-3">
      <a href="update-tables/extra.php" target="_parent">EXTRA_ACTIVITIES</a>
    </div>
    <div id="col" class="column col-lg-3">
      <a href="update-tables/achievement.php" target="_parent">ACHIEVEMENTS</a>
    </div>
  </div>
  <div class="row" background-color= "#3797a4">
    <div id="col2" class="column col-lg-4">
      <a href="update-tables/project.php" target="_parent">PROJECTS</a>
    </div>
    <div id="col2" class="column col-lg-4">
      <a href="update-tables/reference.php" target="_parent">REFERENCES</a>
    </div>
  </div>

</body>

</html>

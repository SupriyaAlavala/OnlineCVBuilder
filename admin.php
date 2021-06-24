<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN-Log In</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <style>
  nav{
    position: fixed;
  }
  * {
   box-sizing: border-box;
   margin:0;
   padding: 0;
  }
  body{
    background-color: white;
    line-height: 1.8;
    font-family: 'Merriweather', serif;
  }
#cont{

  font-family: 'Merriweather', serif;
margin: 30px auto;
max-width: 470px;
padding: 20px;
}
a {
 text-decoration: none;
}
.form-wrap {
  background-color: #e4e3e3;
  padding: 15px 20px;
}
.form-wrap h2{
  padding-top: 20px;
}
.form-wrap p{
  padding-bottom: 15px;
}
.form-wrap h2,
.form-wrap p {

text-align: center;
}
.form-wrap .form-group {
  margin-top: 15px;
}
.form-wrap .form-group label {
  display: block;
  margin-top: 15px;
}
.form-wrap .form-group input {
  width: 100%;
  padding: 6px;
  border: #ddd 1px solid;
  border-radius: 5px;
}
.form-wrap button {
  width:100%;
  background-color: #1b6ca8;
  display: block;
  padding: 10px;
  margin-top: 20px;
  color: white;
  cursor: pointer;
  border: 0;
  font-size: 20px;
  font-weight: bolder;
}
.form-wrap button:hover {
  background-color: #3d7ea6;
  color:white;
}
.form-wrap .bottom-text {
  font-size: 13px;
  margin-top: 20px;
}

footer {

       color:black;
       text-align:  center;
       margin-top: 20px;
  }

footer a {
        color: #1b6ca8;
        font-size: 18px;
        font-weight: bolder;
      }
#emailHelp{
  text-align: center;
}
hr{
  margin: 0;
}
  </style>
  <body >
    <nav class="navbar navbar-light bg-light ">
      <a class="navbar-brand" href="#">
        <img src="images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
        <span style="font-size:23px; font-weight: bold;">Online CV Builder</span>
      </a>
      <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
       <a class="nav-link" href="index.php" style="color:black; margin-right: 30px">HOME</a>
      </form>
    </nav>
    <hr>
    <div id="cont">
      <div class="form-wrap">
        <h2>ADMIN LOGIN</h2>
        <p>Access only to ADMIN.</p>
        <form class="form" action="database-admin.php" method="post">
          <div class="form-group">
            <label for="adminid">Admin_ID</label>
            <input type="text" name="adid" id="adminid" maxlength="20" required >
          </div>
          <div class="form-group">
            <label for="adpassword">Password</label>
            <input type="password" name="adpass" id="adpassword"   required>
          </div>
          <button type="submit" class="btn" name="admin">Log In</button>
        </form>
      </div>
    </div>
  </body>
</html>

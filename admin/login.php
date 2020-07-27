
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../logo/title_logo.png" style="width: 500px;" sizes="32*32" type="image/png">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.js"></script>
</head>
<style>
  body{
    overflow-x: hidden;
  }
  .main-content {
    width: 50%;
    height: 40%;
    margin: 10px auto;
    background-color: #fff;
    border: 2px solid #e6e6e6;
    padding: 40px 50px;
  }
  .header {
    border: 0px solid #000;
    margin-bottom: 5px;
  }
  .well{
    background-color: black;
  }
  #signup{
    width: 60%;
    border-radius: 30px;
  }
  .overlap-text {
    position: relative;
  }

  .overlap-text a {
    position: absolute;
    top: 8px;
    right: 10px;
    font-size: 14px;
    text-decoration: none;
    font-family: 'Overpass Mono', monospace;
    letter-spacing: -1px;
  }
</style>
<body>
  <div class="row">
    <div class="col-sm-12">
      <div class="well">
        <center><h3 style="color: white;"><strong>Hlo Google Admin</strong></h3></center>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="main-content">
            <div class="header">
              <h3 style="text-align: center;"><strong>Login</strong></h3><hr>
            </div>
            <div class="l-part">
            <form  action="login.php" method="post">
                <input type="email" placeholder="Email" name="email" required class="form-control input-md" /><br>
                <div class="overlap-text">
                  <input type="password" placeholder="Password" name="pass" required class="form-control input-md" /><br>
                  <center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
              </div>
              </form>
            </div>
        </div>
    </div>
  </div>
</body>
</html>

<?php 
session_start();
$con = mysqli_connect("localhost","root","","search_engine");

if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['pass'];

 $check_admin = "select * from admin where email='$email' AND password='$password'";
  
  $query = mysqli_query($con,$check_admin); 
  
  $check = mysqli_num_rows($query);
  
  if ($check==1) {
    $_SESSION['email']=$email;
     echo "<script>window.open('index.php','_self')</script>";
  }
   else{
    echo "<script>alert('incorrect details, try again!')</script>";
    echo "<script>window.open('login.php','_self')</script>";
 
   }
}
?>
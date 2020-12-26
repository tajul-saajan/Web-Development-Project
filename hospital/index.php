<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php

$error="";

// cookie remember me
if(!empty($_POST["remember_me"])) {
  setcookie ("member_login",$_POST["lemail"],time()+ (30));
  setcookie ("member_password",$_POST["lpassword"],time()+ (30));
}
/*else {
  if(isset($_COOKIE["member_login"])) {
    setcookie ("member_login","",time()-1);
  }
  if(isset($_COOKIE["member_password"])) {
    setcookie ("member_password","",time()-1);
  }
}*/

if(isset($_POST['reg'])) {
  if($_POST['rpassword']!=$_POST['rcpassword']) {
    $_SESSION['error']="<br>Password does not match<br><br>";
    $_POST = array();
    header( "Location: index.php#register1" );
  }
}

?>

<script type="text/javascript">
  document.getElementById('pass').value="";
</script>


<?php
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
<div class="container">
  <h1>Welcome to Patient Care Hospital's Official Website</h1>
  <p class="block-quote">Our aim has always been to bring world–class medical care within the reach of common man.</p>
  <p>

    <!-- nav bar -->
      <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Patient Care</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li ><a href="doctors_list.php">Doctors List</a></li>
          <li><a href="hospital_services.php">Hospital Services</a></li>
          <li><a href="about_us.php">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#register1"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

          <li><input type="text" id="search" placeholder="search doctor"></li>
        </ul>
      </div>
    </nav>


      <!-- nav bar -->

    <!-- slideshow images -->
    <?php include('slideshow.php');?>

  </p>

  <?php
    if(isset($_POST['lemail'])){
      $i = login($_POST['lemail'],$_POST['lpassword'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php" </script>';
      }
    }else if(isset($_POST['remail'])){
      $i = register($_POST['remail'],$_POST['rpassword'],$_POST['rfullname'],"users");
      if($i==1){
        echo '<script type="text/javascript"> window.location = "add_patient.php"</script>';
      }
    }else{
      echo "<div class='alert alert-info'>
              <strong>Info!</strong> Login or Register to be able to book your appointment.</div>";
    }

    unset($_POST);
  ?>



  <div class="row" id="login">
    <div class="col col-xl-6 col-sm-6">
      <h2>Login</h2>
      <form action="index.php" method="POST">
        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="lemail" value="
          <?php if(isset($_COOKIE["member_login"]))
          { echo $_COOKIE["member_login"]; } ?>" required>
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pass" name="lpassword" value="
          <?php if(isset($_COOKIE["member_password"]))
          { echo $_COOKIE["member_password"]; } ?>" required>
        </div>

        <?php if(isset($_COOKIE["member_password"]))
        { echo $_COOKIE["member_password"]; } ?>

        <div class="form-group">
          <input type="checkbox" name="remember_me"
          <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
          Remember Me <br>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          <input type="reset" class="btn btn-danger">
        </div>

      </form>
    </div>



    <div class="col col-xl-6 col-sm-6" id="register1">
      <form method="post" action="index.php">
        <h2>Registration</h2>
        <?php
         if(isset($_SESSION['error'])) {
           echo $_SESSION['error'];
         }
         ?>
        <div class="form-group">
          <label for="usr">Full Name:</label>
          <input type="text" class="form-control" name="rfullname" required>
        </div>

        <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" name="remail" required>
        </div>

        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="rpassword" required>
        </div>

        <div class="form-group">
          <label for="pwd"> Confirm Password:</label>
          <input type="password" class="form-control" name="rcpassword" required>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="reg">
          <input type="reset" class="btn btn-danger">
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>

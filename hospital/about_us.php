<?php
session_start();
?>
<link href="bootstrap.min.css" rel="stylesheet">

<?php
  include("header.php");
  include("library.php");
  noAccessIfLoggedIn();
?>
<div class="container">
  <h1>Welcome to Patient Care Hospital's Official Website</h1>
  <p class="block-quote">Our aim has always been to bring world–class
    medical care within the reach of common man.</p>
  <p>


<!-- nav bar -->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Patient Care</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Home</a></li>
      <li ><a href="doctors_list.php">Doctors List</a></li>
      <li ><a href="hospital_services.php">Hospital Services</a></li>
      <li class="active"><a href="about_us.php">About Us</a></li>
    </ul>

  </div>
</nav>


  <!-- nav bar -->


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

    <!-- main content -->
    <img src="images/about_hos_banner.jpg" alt="">
    <img src="images/difference.jpg" alt="">

    <!-- main content -->


  </div>
</div>

<!-- xml -->

<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<management>
 <owner>
  <title>PHP: Behind the Parser</title>
  <characters>
   <character>
    <name>Ms. Coder</name>
    <actor>Onlivia Actora</actor>
   </character>
   <character>
    <name>Mr. Coder</name>
    <actor>El Act&#211;r</actor>
   </character>
  </characters>
  <info>
   So, this language. It's like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.
  </info>
  <great-lines>
   <line>PHP solves all my web problems</line>
  </great-lines>
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </owner>
</management>
XML;
?>

<?php


$management = new SimpleXMLElement($xmlstr);

echo $management->owner[0]->info;
?>



<?php include("footer.php"); ?>

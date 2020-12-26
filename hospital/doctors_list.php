<?php
session_start();
?>
<startTag href="bootstrap.min.css" rel="stylesheet">

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
      <li ><a href="index.php">Home</a></li>
      <li class="active"><a href="doctors_list.php">Doctors List</a></li>
      <li ><a href="hospital_services.php">Hospital Services</a></li>
      <li ><a href="about_us.php">About Us</a></li>
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

    <table class="table">
      <thead>
        <th>Doctor name</th>
        <th>Speciality</th>
        <th>Email</th>
        <th>Take Appointment</th>
      </thead>



    <?php

        $sql="SELECT * from doctors";
        global $connection;
        $result = $connection->query($sql);

        $startTag = "<td >";
        $endingTag = '</td>';

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_array()) {

            $link = "<td ><a href= 'index.php#login'>Appointment</a></td>";

            echo "<tr>";
            echo "$startTag".$row['fullname']."$endingTag";
            echo "$startTag".$row['speciality']."$endingTag";
            echo "$startTag".$row['email']."$endingTag";
            echo "$link";
            echo "</tr>";
          }
        } else {
          echo "0 results";
        }
    ?>
    </table>

    <!-- main content -->


  </div>
</div>
<?php include("footer.php"); ?>

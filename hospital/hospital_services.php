

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
          <li ><a href="doctors_list.php">Doctors List</a></li>
          <li class="active"><a href="hospital_services.php">Hospital Services</a></li>
          <li><a href="about_us.php">About Us</a></li>
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
  <h1>Services</h1>
  <div class="services">
    <div class="section">
      <div class="right">
        <h3>24 Hour emergency</h3>
        <img src="images/emergency.jpg" alt="emergency" height="50%" width="50%">
      </div>
      <div class="left">
        <p>Patient Care Hospital operates one of the best Accident & Emergency
          Centre in Bangladesh, providing services for trauma and non-trauma medical
          and surgical emergencies 24 hours a day, seven days a week. Apollo Accident &
          Emergency Centre is conveniently located in level-1 of the hospital with a separate
          entrance. The fully equipped Centre is staffed with full-time experienced physicians,
          nurses and paramedic team, who are specialized in all areas of Emergency Medicine.
          The Centre provides a range of state-of-the-art equipments and technology for
          emergency management and support, as well as emergency access to other sub
          specialties and physicians. The Centre is also supported by 24-hour imaging,
          laboratory and Blood Bank services. Life support equipped ambulances are on
          the go round-the-clock for emergency patients. </p>
        </div>
      </div>

      <div class="section">
        <div class="right">
          <h3>Cancer Care</h3>
          <img src="images/cancer_care.jpg" alt="emergency" height="50%" width="50%">
        </div>
        <div class="left">
          <p> Cancer Care Ontario is the Ontario government’s principal cancer advisor and
            a division of CCO. We equip health professionals, organizations and policy-makers
            with the most up-to-date cancer
            knowledge and tools to prevent cancer and deliver high-quality patient care. </p>
          </div>
        </div>

        <div class="section">
          <div class="right">
            <h3>Women health</h3>
            <img src="images/women-health.jpg" alt="Women health" height="50%" width="50%">
          </div>
          <div class="left">
            <p> At Women's Health Services, we focus on providing comprehensive, compassionate,
              innovative care to women, men, teens and their families. We are a non-profit,
              Title X funded organization dedicated to providing family planning services in
              Clinton and Jackson counties.</p>
            </div>
          </div>


          <div class="section">
            <div class="right">
              <h3>Pediatric Care</h3>
              <img src="images/child.jpg" alt="pediatric care" height="50%" width="50%">
            </div>
            <div class="left">
              <p> Talking to Children About Tragedies & Other News Events. healthychildren.org.
                ​The American Academy of Pediatrics (AAP) encourages parents, teachers, child care
                providers, and others who work closely with children to filter information about
                the crisis and present it in a way that their child can accommodate,</p>
              </div>
            </div>


          </div>
          <!-- main content -->

        </div>
      </div>
      <?php include("footer.php"); ?>

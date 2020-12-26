<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Hospital Management Project with PHP MySql
    </title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- ajax script -->
     <script type="text/javascript"
     src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- javascript -->
    <script type="text/javascript" src="script.js"></script>

     <style>
      .navbar> a {
        font-size:250%;
      }
      .left {
          font-size: 120%;
      }
      .right img{
        float: right;
        border-radius: 8px;
      }
      .section {
        border: 1px solid blue;
        display: inline-block;
        padding: 0px 16px;
        padding-bottom: 16px;
        background-color:#000000;
        color: white;
        border-radius: 8px;
        margin-bottom: 16px;

      }
      .form-group label {
        text-align:left;
      }
      #ajax a:hover {
        cursor: pointer;
        background-color: yellow;
      }
     </style>
  </head>
  <body>
      <div class="container" style="padding-top: 10px;">
        <nav class="navbar  navbar-static-top">
          <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat" style="font-size:32px;color:red"></i> Patient Care Hospital</a>
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a href="#" target="_blank"> Address: KUET Medical Centre,KUET,Khulna</a>
              </li>
              <li class="nav-item">
                <a class="" href="tel:+8801555555">Ambulance Number: +11 22334455</a>
              </li>
              <?php
                if (isset($_SESSION['username'])) {
                    echo '<li class="nav-item" style="align-items: right;"> <a class="nav-link" href="logout.php">Logout</a>
                  </li>';
                }
              ?>
            </ul>
        </nav>

      </div>

  </body>

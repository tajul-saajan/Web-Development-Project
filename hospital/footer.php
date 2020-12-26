<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    p a {
      font-size: 175%;
      color: white;
      border-radius: 4px;
      padding: 4px 8px;
      opacity: .8;
      background-color: #D41919;
    }

    p a:hover {
      opacity:.95;
      color : white;
      font-size: 250%;
      background-color: #D41919;
    }

    p b {
      font-size : 180%;
    }

    span {
      font-weight: bold;
    }
    #credit {
      background-color: #000000 ;
      color: white;
      margin-top : 32px;
      padding : 16px;
      border-radius: 8px;
      opacity : .8;
    }
  </style>
</head>

<body>

  <div class="container footer">
    <hr>
    <footer>
      <p align="right" style="color:white;">
        <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a class="nav-link" href="hms-staff.php" >Staff Login</a>
                  </li>';
                }
        ?>
      </p>
      <div id="credit">
        <p align="right">
          Made and Managed using <i>PHP ,MySql</i> by <b>Tajul Islam</b> - &copy
          <?php echo date('Y'); ?>
          <br>
          <span>Roll : 1307014</span>

        </p>
      </div>
    </footer>
  </div>
</body>

</html>


<?php session_start(); ?>
<head>
  <title>CADAVenturs - Rentals</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse"  id="navbarCollapse">
  <ul class="navbar-nav" >
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="generalType.php?type=res">Residential</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="generalType.php?type=com">Comercial</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="generalType.php?type=ind">Industrial</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Residents
      </a>
      <div class="dropdown-menu">
        <?php if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) :
          echo "<a class=\"dropdown-item\" href=\"Maintenance.php\">Maintenance</a>
          <a class=\"dropdown-item\" href=\"acount.php\">Account</a>";
         else:
          echo "<a class=\"dropdown-item\" href=\"log-in.php\">Maintenance</a>
          <a class=\"dropdown-item\" href=\"log-in.php\">Account</a>";
         endif; ?>
      </div>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <?php if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) :
      echo "<a class=\"nav-link\" href=\"log-out.php\">Log Out</a>";
      else:
      echo "<a class=\"nav-link\" href=\"log-in.php\">Log In</a>";
      endif; ?>
    </li>
  </ul>
</div>
</nav>

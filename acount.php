<!-- <body class="d-flex flex-column h-100"> -->
  <?php
    require_once "nav-bar.php";
    require_once "DAO.php";
    $dao = new Dao();
    $user;
    if (!isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"]) {
      header("Location:index.php");
    }else{
      $user = $dao->getUser(@$_SESSION['email']);
    }
   ?>
<body class="d-flex flex-column h-100">
  <div class="container">
    <!-- <div class="payment_box"> -->
    <div class="jumbotron jumbotron-fluid payment_box">
        <?php if($user['Renting'] != NULL):;?>
        <h1 class="display-4 title">Payment</h1>
        <div class="row justify-content-center ">
          <div class="col-sm-4" align="center">
              <p> Next Payment due:<br>
              <h2><?php echo date("m/d/y", strtotime(date('m', strtotime('+1 month')).'/01/'.date('Y').' 00:00:00'));?><h2></p>
          </div>
          <div class="col-sm-4" align="center">
            <p>Make Online Payment:</p>
            <button href="#">Pay Online</button>
          </div>
          <div class="col-sm-4" align="center">
            <p>Amount due per month:</p>
            <h2>$<?php echo $user['Rent'];?>/month<h2>
          </div>
        </div>
      <?php else: ?>
        <div class="row align-items-center justify-content-center">
          <p class="text-center">You are curently not renting a property. If this is incorect please email cadaventuresmaintenance@gmail.com with the
          email you have signed your lease with and we shall update your acount.</p>
        </div>
      <?php endif; ?>
    </div>
    <div class="jumbotron jumbotron-fluid payment_box">
        <h1 class="display-4 title">Rental Information</h1>
        <?php if($user['Renting'] != NULL): $address = $dao->getInfo((int)$user['Renting']);;?>
        <div class="row justify-content-center ">
          <div class="col-sm-4" align="center">
            <p> Address:<br>
            <h2><?php echo $address[0]['StreetAddress'] . " " . $address[0]['City']
            . " " . $address[0]['State'];?><h2></p>
          </div>
          <div class="col-sm-4" align="center">
            <p>Lease Time Period:</p>
            <h2><?php echo $address[0]['LeaseStart'] . " to " . $address[0]['LeaseEnd']
            . " " . $address[0]['State'];?><h2></p>
          </div>
          <div class="col-sm-4" align="center">
            <p>Amount due per month:</p>
            <h2>$<?php echo $user['Rent'];?>/month<h2>
          </div>
        </div>
      <?php endif; ?>
    </div>


  <?php require_once "footer.php";?>
</body>

<body class="d-flex flex-column h-100">
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
  <div class="container">
    <!-- <div class="payment_box"> -->
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">Payment</h1>
        <?php if($user['Renting'] != NULL): $address = $dao->getInfo((int)$user['Renting']);?>
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-4">
              <p> Next Payment due:<br>
              <?php echo date("m/d/y", strtotime(date('m', strtotime('+1 month')).'/01/'.date('Y').' 00:00:00'));?></p>
          </div>
          <div class="col-sm-4">
            <p>Make Online Payment:</p><br>
            <button href="#">Pay Online</button>
          </div>
          <div class="col-sm-4">
            <p>Amount due per month:</p>
          </div>
        </div>
      <?php else: ?>
        <div class="row align-items-center justify-content-center">
          <p class="text-center">You are curently not renting a property. If this is incorect please email cadaventuresmaintenance@gmail.com with the
          email you have signed your lease with and we shall update your acount.</p>
        </div>
      <?php endif; ?>
    </div>


  <?php require_once "footer.php";?>
</body>

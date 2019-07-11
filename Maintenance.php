<body>
  <div>
    <?php require_once "nav-bar.php";
    require_once "DAO.php";
    $dao = new Dao();
    $user;
    if (!isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"]) {
      header("Location:index.php");
    }else{
      $user = $dao->getUser(@$_SESSION['email']);
    }
    ?>
  </div>

  <div class="container">
    <?php if($user[Renting] != NULL):
      $address = $dao->getAdress($user[Renting])?>
    <div class="row align-items-center justify-content-center" style="height:100%">
      <div class="col-sm-8">
        <form method="POST" action="Maintenance-handler.php">
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email address</label>
            <div class="col-sm-10">
            <input type="email" name="email" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo @$_SESSION['email'];?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label"> Address</label>
            <div class="col-sm-10">
            <input  name="address" readonly class="form-control-plaintext"  value="<?php echo $address['StreetAddress'] . " " . $address['City'] . " " . $address['State'];?>">
            </div>
          </div>
          <div class="form-group">
            <label for="breif description">breif description</label>
            <textarea class="form-control" id="generalDescription" name="subjectLine" maxlength="40" placeholder="40 characters long"></textarea>
          </div>
          <div class="form-group">
            <label for="general description">description</label>
            <textarea class="form-control" id="generalDescription" name="generalDescription" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mb-2">upload</button>
        </form>
      </div>
    </div>
  <?php else: ?>
    <div class="row align-items-center justify-content-center" style="height:100%">
      <p class="text-center">You are curently not renting a property. If this is incorect please email cadaventuresmaintenance@gmail.com with the
      email you have signed your lease with and we shall update your acount.</p>
    </div>
  <?php endif; ?>
  </div>

</body>

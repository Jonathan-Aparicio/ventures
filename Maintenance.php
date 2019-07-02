<body>
  <div>
    <?php require_once "nav-bar.php";
    if (!isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"]) {
      header("Location:index.php");
    }
    ?>
  </div>

  <div class="container">
    <div class="row align-items-center justify-content-center" style="height:100%">
      <div class="col-sm-8">
        <form method="POST" action="Maintenance-handler.php">
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email address</label>
            <div class="col-sm-10">
            <input type="email" name="email" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo @$_SESSION['email'];?>">
            </div>
            <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
          </div>
          <div class="form-group">
            <label for="general description">Example textarea</label>
            <textarea class="form-control" id="generalDescription" name="generalDescription" rows="5"></textarea>
          </div>
          <button type="submit" class="btn btn-primary mb-2">upload</button>
        </form>
      </div>
    </div>
  </div>

</body>

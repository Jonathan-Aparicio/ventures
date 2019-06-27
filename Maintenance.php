<body>
  <div>
    <?php require_once "nav-bar.php";
    if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
      header("Location:index.php");
    }
    ?>
  </div>

  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-sm-6">
        <form>
          <div class="form-group">
            <label for="emal">Email address</label>
            <input type="emal" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo @$_SESSION['email'];?>">
            <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
          </div>
          <div class="form-group">
            <label for="general description">Example textarea</label>
            <textarea class="form-control" id="generalDescription" name="generalDescription" rows="3"></textarea>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

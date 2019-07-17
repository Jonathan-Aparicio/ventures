<?php
  require_once "DAO.php";
  $dao = new Dao();
  $id = $_GET["id"];

  $info =  $dao->getInfo($id);
  $pics = $dao->getPics($id);
  $size = count($pics);
 ?>
<body class="d-flex flex-column h-100">
<div>
  <?php require_once "nav-bar.php";?>
</div>

<div class="content">
<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-sm-6">
  <!-- <div class="row justify-content-center"> -->
    <!-- <div class="col-sm-6"> -->
      <img class="img-fluid" src="<?php echo $info[0]['MainPhoto'];?>">
    <!-- </div> -->
  <!-- </div> -->
</div>


    <div class="col-sm-6">
  <div class="info">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <?php echo "<p class=\"text-center\">" . $info[0]['StreetAddress'] . " " . $info[$x]['City'] . " " . $info[$x]['State'] . "</p>"?>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-6">
        <p class="text-center"><?php echo $info[0]['Description']; ?></p>

      </div>
    </div>

  </div>

  <?php $z = 0;
    for($x = 0; $x < ceil($size/2); $x++){
      echo "<div class=\"content\"><div class=\"row justify-content-center\">";

        for($y = 0; $y < 2; $y++){
          if(empty($pics[$z])){
            break;
          }else{
            echo "<div class=\"col-sm-6\">
              <img class=\"img-fluid\" src=\"" . $pics[$z]['image'] . "\">
            </div>";
            $z++;
          }
        }
      echo "</div></div>";

    }
  ?>

</div>
</div>
</div>
</div>

<!-- <footer class="footer mt-auto py-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <h4><p class="text-center"> CADAVenturs</p></h4>
        <p class="text-center"> Thank you for checking out our rentals. If you have questions please feel free to contact us.</p>
      </div>
      <div class="col-sm-6">
        <p class="text-center">Email:</p>
        <p class="text-center">cadaventuresmaintenance@gmail.com</p>
      </div>
    </div>
  </div>
</footer> -->
<div>
  <?php require_once "footer.php";?>
</div>
</body>

<?php
  require_once "DAO.php";
  $dao = new Dao();
  $id = $_GET["id"];

  $info =  $dao->getInfo($id);
  $pics = $dao->getPics($id);
  $size = count($pics);
 ?>
<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>


<div class="container">
  <div class="row justify-content-center">
    <!-- <div class="col-3"></div> -->
    <div class="col-sm-6"><img class="img-fluid" src="<?php echo $info[0]['MainPhoto'];?>"></div>
    <!-- <div class="col-3"></div> -->
  </div>

  <div class="row">

  </div>



  <?php for ($x = 0; $x <= $size; $x++) {
            echo " <div class=\"row\">
                <div class=\"col-sm-4\">
                  <img class=\"img-fluid\" src=\"" . $pics[$x]['image'] . "\">
                </div>
                <div class=\"col-sm-4\">
                  <img class=\"img-fluid\" src=\"" . $pics[$x+1]['image'] . "\">
                </div>
                <div class=\"col-sm-4\">
                  <img class=\"img-fluid\" src=\"" . $pics[$x+2]['image'] . "\">
                </div>";

          $x= $x + 2;
        }
  ?>
  <div/>

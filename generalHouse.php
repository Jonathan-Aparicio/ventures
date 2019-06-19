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
    <div class="col-sm-6"><img class="img-fluid" src="<?php echo $info[0]['MainPhoto'];?>"></div>
  </div>

  <div class="info">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <?php echo "<p class=\"text-center\">" . $info[0]['StreetAddress'] . " " . $info[$x]['City'] . " " . $info[$x]['State'] . "</p>"?>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-4">
        <p class="text-center"><?php echo $info[0]['Description'] ?></p>

      </div>
    </div>

  </div>

  <?php $z = 0;
    for($x = 0; $x < ceil($size/3); $x++){
      echo "<div class=\"row\">";

        for($y = 0; $y < 3; $y++){
          if(empty($pics[$z])){
            break;
          }else{
            echo "<div class=\"col-sm-4\">
              <img class=\"img-fluid\" src=\"" . $pics[$z]['image'] . "\">
            </div>";
            $z++;
          }
        }
      echo "</div>";

    }
  ?>

            <!-- // echo " <div class=\"row\">
            //     <div class=\"col-sm-4\">
            //       <img class=\"img-fluid\" src=\"" . $pics[$x]['image'] . "\">
            //     </div>
            //     <div class=\"col-sm-4\">
            //       <img class=\"img-fluid\" src=\"" . $pics[$x+1]['image'] . "\">
            //     </div>
            //     <div class=\"col-sm-4\">
            //       <img class=\"img-fluid\" src=\"" . $pics[$x+2]['image'] . "\">
            //     </div>";

        //   $x= $x + 2;
        // } -->

  <div/>

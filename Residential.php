<?php
  require_once "DAO.php";
  $dao = new Dao();
 $type = 0;
 $info =  $dao->getMainHousePhotos($type);
 $size = count($info);
 echo "$size";
 ?>
<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>


<div class="container">
  <?php for ($x = 0; $x <= $size; $x++) {
            echo " <div class=\"row\">
                <div class=\"col-sm-4\">
                  <a href=\"generalHouse.php?id="$info[$x]['ID']"\" >
                  <img class=\"img-responsive\" src=\"" . $info[$x]['MainPhoto'] . "\">
                  <h3><p class=\"text-center\">" . $info[$x]['StreetAddress'] . " " . $info[$x]['City'] . " " . $info[$x]['State'] . "</p></h3></a>
                </div>
                <div class=\"col-sm-4\">
                  <img class=\"img-responsive\" src=\"" . $info[$x+1]['MainPhoto'] . "\">
                  <h3><p class=\"text-center\">" . $info[$x+1]['StreetAddress'] . " " . $info[$x+1]['City'] . " " . $info[$x+1]['State'] . "</p></h3>
                </div>
                <div class=\"col-sm-4\">
                  <img class=\"img-responsive\" src=\"" . $info[$x+2]['MainPhoto'] . "\">
                  <h3><p class=\"text-center\">" . $info[$x+2]['StreetAddress'] . " " . $info[$x+2]['City'] . " " . $info[$x+2]['State'] . "</p></h3>
                </div>";

          $x= $x + 2;
        }
  ?>
  <div/>

  </body>

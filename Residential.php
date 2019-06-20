<?php
  require_once "DAO.php";
  $dao = new Dao();
 $type = 'res';
 $info =  $dao->getMainHousePhotos($type);
 $size = count($info);
 ?>
<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>

<div class="content">
<div class="container">

  <?php $z = 0;
    for($x = 0; $x < ceil($size/3); $x++){
      echo "<div class=\"row justify-content-center\">";

        for($y = 0; $y < 3; $y++){
          if(empty($info[$z])){
            break;
          }else{
            echo "<div class=\"col-sm-4\">
              <a href=\"generalHouse.php?id=".$info[$z]['ID']."\" >
              <img class=\"img-fluid\" src=\"" . $info[$z]['MainPhoto'] . "\">
              <h3><p class=\"text-center\">" . $info[$z]['StreetAddress'] . " " . $info[$z]['City'] . " " . $info[$z]['State'] . "</p></h3></a>
            </div>";
            $z++;
          }
        }
      echo "</div>";

    }
  ?>
</div>
</div>
  </body>

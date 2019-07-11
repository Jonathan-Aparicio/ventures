<?php
  require_once "DAO.php";
  $dao = new Dao();
 $type =  $_GET["type"];
 $info =  $dao->getMainHousePhotos($type);
 $size = count($info);
 ?>
<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>

<!-- <div class="content"> -->
<div class="container">

  <?php $z = 0;
    for($x = 0; $x < ceil($size/3); $x++){

      echo "<div class=\"content\"><div class=\"row justify-content-center\">";


        for($y = 0; $y < 3; $y++){
          if(empty($info[$z])){
            break;
          }else{

            echo "<div class=\"col-sm-4\">
                    <div class=\"card\">
                      <img class=\"card-img-top\" src=\"" . $info[$z]['MainPhoto'] ."\" alt=\"Card image\" >
                      <div class=\"card-body\">
                      <h4 class=\"card-title\">John Doe</h4>
                      <p class=\"card-text\">" . $info[$z]['StreetAddress'] . " " . $info[$z]['City'] . " " . $info[$z]['State'] . "</p>
                      <a href=\"generalHouse.php?id=".$info[$z]['ID']."\" class=\"stretched-link\"></a>
                      </div>
                    </div>
                  </div>";

            $z++;
          }
        }
      echo "</div></div>";

    }
  ?>
</div>
<!-- </div> -->
  </body>

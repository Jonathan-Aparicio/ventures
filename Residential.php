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


<div class="container">

  <?php $z = 0;
    for($x = 0; $x < ceil($size/3); $x++){
      echo "<div class=\"row\">";

        for($y = 0; $y < 3; $y++){
          if(empty($pics[$z])){
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

  <?php
  // for ($x = 0; $x <= $size; $x++) {
  //           echo " <div class=\"row\">
  //               <div class=\"col-sm-4\">
  //                 <a href=\"generalHouse.php?id=".$info[$x]['ID']."\" >
  //                 <img class=\"img-fluid\" src=\"" . $info[$x]['MainPhoto'] . "\">
  //                 <h3><p class=\"text-center\">" . $info[$x]['StreetAddress'] . " " . $info[$x]['City'] . " " . $info[$x]['State'] . "</p></h3></a>
  //               </div>
  //               <div class=\"col-sm-4\">
  //                 <img class=\"img-fluid\" src=\"" . $info[$x+1]['MainPhoto'] . "\">
  //                 <h3><p class=\"text-center\">" . $info[$x+1]['StreetAddress'] . " " . $info[$x+1]['City'] . " " . $info[$x+1]['State'] . "</p></h3>
  //               </div>
  //               <div class=\"col-sm-4\">
  //                 <img class=\"img-fluid\" src=\"" . $info[$x+2]['MainPhoto'] . "\">
  //                 <h3><p class=\"text-center\">" . $info[$x+2]['StreetAddress'] . " " . $info[$x+2]['City'] . " " . $info[$x+2]['State'] . "</p></h3>
  //               </div>";
  //
  //         $x= $x + 2;
  //       }
  ?>
  <div/>

  </body>

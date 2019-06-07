<?php
  require_once "Dao.php";
  $dao = new Dao();
  // $info = array();
 $type = 0;
 $info =  $dao->getMainHousePhotos($id, $type);
 $size = count($info);
 echo "$size";
 ?>
<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>


<div class="container">
  <?php for ($x = 0; $x <= $size; $x++) {
            echo " <div class="row">
                <div class="col-sm-4">
                  <img class="img-responsive" src="$info[$x]['MainPhoto']">
                  bage house
                </div>
                <div class="col-sm-4">
                  <img class="img-responsive" src="$info[$x+1]['MainPhoto']">
                </div>
                <div class="col-sm-4">
                  <img class="img-responsive" src="$info[$x+2]['MainPhoto']">
                </div>";

          $x= $x + 2;
        }
  ?>
  <!-- // <div class="row">
  //   <div class="col-sm-4">
  //     <img class="img-responsive" src="bage-house.jpg">
  //     bage house
  //   </div>
  //   <div class="col-sm-4">
  //     <img class="img-responsive" src="white-house.jpg">
  //   </div>
  //   <div class="col-sm-4">
  //     <img class="img-responsive" src="blue-house.jpg">
  //   </div> -->
  </body>

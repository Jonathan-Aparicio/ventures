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
    <!-- <div class="col-sm-12"> -->
  <!-- <div class="row justify-content-center"> -->
    <div class="col-sm-6">
      <img class="img-fluid" src="<?php echo $info[0]['MainPhoto'];?>">
    </div>
  <!-- </div> -->
<!-- </div> -->


    <div class="col-sm-6">
  <div class="info">
    <div class="row justify-content-center">
      <div class="col-sm-12">
        <?php echo "<p class=\"text-center\">" . $info[0]['StreetAddress'] . " " . $info[$x]['City'] . " " . $info[$x]['State'] . "</p>"?>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-12">
        <p class="text-center"><?php echo $info[0]['Description']; ?></p>

      </div>
    </div>

  </div>
</div>
</div>

  <?php $z = 0;
    for($x = 0; $x < ceil($size/3); $x++){
      echo "<div class=\"content\"><div class=\"row justify-content-center\">";

        for($y = 0; $y < 3; $y++){
          if(empty($pics[$z])){
            break;
          }else{
            echo "<div class=\"col-sm-4\">
              <img id=\"extra-img\"class=\"img-fluid\" src=\"" . $pics[$z]['image'] . " \" data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"" . $pics[$z]['image'] . "\">
            </div>";
            $z++;
          }
        }
      echo "</div></div>";

    }
  ?>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var source = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-body img').attr("src", source)
})
</script>




  <?php require_once "footer.php";?>

</body>


<div>
  <?php require_once "nav-bar.php";
  require_once "DAO.php";
  $dao = new Dao();
  $pics = $dao->getAllMainHousePhotos();
  ?>
</div>
<body class="d-flex flex-column h-100">
  <div class="bi">
    <h4>CADAVenturs</h4>
    <!-- <img src="images/frontpage.jpg"> -->
  </div>
  <div class="container">

    <div class="jumbotron">
  <!-- <h1>Bootstrap Tutorial</h1> -->
  <p class="text-center">Welcome to CADAVentures rentals curently this website is a school project. All pictures being used are stock photos
    </p>
</div>

<div class="row justify-content-center">
  <div class="col-sm-10">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php
              echo "<div class=\"carousel-item active\">
                      <img src=\"".$pics[0]['MainPhoto']."\"  class=\"d-block w-100 h-50\">
                    </div>";
              for($y = 1; $y < sizeof($pics); $y++){
                  echo "<div class=\"carousel-item\">
                          <img src=\"".$pics[$y]['MainPhoto']."\"  class=\"d-block w-100 h-50\">
                        </div>";
              }
        ?>
      </div>
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>
</div>



      <?php require_once "footer.php";?>

  </body>

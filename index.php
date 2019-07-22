
<div>
  <?php require_once "nav-bar.php";
  require_once "DAO.php";
  $dao = new Dao();
  $pics = $dao->getAllMainHousePhotos();
  ?>
</div>
<body class="d-flex flex-column h-100">
  <div class="container">
    <div class="jumbotron">
  <!-- <h1>Bootstrap Tutorial</h1> -->
  <p class="text-center">Welcome to CADAVentures rentals curently this website is a school project. All pictures being used are stock photos
    </p>
</div>

<div class="row justify-content-center">
  <div class="col-sm-4">
<div class="card">
    <img class="card-img-top" src="images\res\brick\brick-house.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="stretched-link"></a>
    </div>
  </div>
</div>
</div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php
              for($y = 0; $y < sizeof($pics); $y++){
                  echo "<div class=\"item\">
                          <img src=\"".$pics[$y]['MainPhoto']."\"  class=\"d-block w-100\">
                        </div>";
              }

        ?>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>



      <?php require_once "footer.php";?>

  </body>

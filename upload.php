<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>

<body>
  <div class="container">
    <form action="uploadHandler.php" method="post" enctype="multipart/form-data" >
       <h2>Upload File</h2>
       <label for="fileSelect">Filename:</label>
       <input type="image" name="fileToUpload" id="fileSelect">
       <br><br>
       <input type="submit" name="submit" value="Upload">
     </form>
  </div>
</body>

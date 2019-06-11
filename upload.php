<body>
<div>
  <?php require_once "nav-bar.php";?>
</div>

<body>
  <div class="container">
    <form action="upload-manager.php" method="post" enctype="multipart/form-data" action="uploadHandler.php">
       <h2>Upload File</h2>
       <label for="fileSelect">Filename:</label>
       <input type="file" name="photo" id="fileSelect">
       <input type="submit" name="submit" value="Upload">
     </form>
  </div>
</body>

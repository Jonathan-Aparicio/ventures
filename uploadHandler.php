<?php
session_start();
  require_once "DAO.php";
  $dao = new Dao();
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

      // $dao->updateMain(0,$_FILES["photo"]["name"]);

      <?php
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $dao->updateMain(0,$target_file);
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      ?>


      header("Location:upload.php");
      exit;
    // Check if file was uploaded without errors
    // if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
    //     $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    //     $filename = $_FILES["photo"]["name"];
    //     $filetype = $_FILES["photo"]["type"];
    //     $filesize = $_FILES["photo"]["size"];
    //
    //     // Verify file extension
    //     $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //     if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    //
    //     // Verify file size - 5MB maximum
    //     $maxsize = 5 * 1024 * 1024;
    //     if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    //
    //     // Verify MYME type of the file
    //     if(in_array($filetype, $allowed)){
    //         // Check whether file exists before uploading it
    //         if(file_exists("upload/" . $filename)){
    //             echo $filename . " is already exists.";
    //         } else{
    //             move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
    //             echo "Your file was uploaded successfully.";
    //         }
    //     } else{
    //         echo "Error: There was a problem uploading your file. Please try again.";
    //     }
    // } else{
    //     echo "Error: " . $_FILES["photo"]["error"];
    // }
}
?>

<?php
session_start();
require_once "Dao.php";
$dao = new Dao();

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['email']=$username;
$status = true;
$messages = array();

if(empty($_POST['username'])){
  $status = false;
  $messages[] = "ENTER A EMAIL";
}else if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
  $messages[] = "ENTER A VALID EMAIL";
  echo "Bad username";
  $status = false;
}

if(empty($_POST['password'])){
  $status = false;
  $messages[] = "ENTER A PASSWORD";
}else if(!preg_match('/([A-Z]|[0-9]|[a-z]){4,8}/',$password)){
  echo "Bad pasword";
  $messages[] = "ENTER A PASSWORD THAT IS 4-8 CHARACTERS LONG THAT CONTAINS ONLY UPPER AND
  LOWER CASE CHARACTERS AND DIGGITS 0-9";
  $status = false;
}

if($status){
  $salt = 'supersaltysalt';
  $saltedpassword = $password.$salt;
  if($dao->checkExists($username)){
    $dbpass = $dao->getPass($username);
    if(password_verify($saltedpassword, $dbpass['Password'])){
      $_SESSION["access_granted"]=true;
      if(isset($_SESSION['target'])){
        $target = $_SESSION['target'];
        header("Location: $target");
        exit;
      }else{
        header("Location: index.php");
        exit;
      }
    }
  }else{
    $messages[] = "NOT A VAILD EMAIL OR PASSWORD";
  }
}


 $_SESSION["access_granted"] = false;
 $_SESSION['message']=$messages;
 header("Location:log-in.php");
 exit;

?>

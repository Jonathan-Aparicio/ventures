<?php
  session_start();
  require_once "DAO.php";
  $dao = new Dao();

  $username = $_POST['username'];
  $password = $_POST['password'];
  $Cpassword = $_POST['c-password'];
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

  if(empty($_POST['c-password'])){
    $status = false;
    $messages[] = "ENTER CONFORMATION PASSWORD";
  }else if(strcmp($password,$Cpassword)!=0){
    $messages[] = "PASSWORDS DO NOT MATCH";
    $status = false;
  }

  if($status){
    if($dao->checkExists($username)){
      echo "email in use ";
      $messages[] = "THIS EMAIL IS ALREADY IN USE";
    }else {
      echo "add user ";
      $salt = 'supersaltysalt';
      $saltedpassword = $password.$salt;
      $hashedpassword = password_hash($saltedpassword, PASSWORD_BCRYPT);
      $dao->addUser($username,$hashedpassword);
      header("Location: log-in.php");
      exit;
    }
  }
    $_SESSION['message'] = $messages;
    header("Location: register.php");
    exit;

?>

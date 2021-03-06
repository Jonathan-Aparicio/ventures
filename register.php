<?php
 require_once "nav-bar.php";

  if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
    header("Location:index.php");
  }
?>
<head>
    <link rel="stylesheet" type="text/css" href="log-in.css">
</head>

<body class="text-center">
  <div class="log">
    <form class="form-signin" method="POST" action="register-handler.php">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="username" id="inputEmail" class="form-control" placeholder="Email address" value="<?php echo @$_SESSION['email'];?>" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
    <label for="inputPassword" class="sr-only">Confrim Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="c-password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="log-in.php">Log In</a>
    <?php if(isset($_SESSION['message'])):
            foreach(@$_SESSION['message'] as $message){
              echo "<div class=\"alert alert-warning\"> . $message . </div>";
            }else: echo "<div class=\"alert-info\">password must be 4-8 characters that only contain upper and
            lower case characters and diggits 0-9</div>";
            endif;
            unset($_SESSION['message']);
    ?>
    </form>

  </div>
</body>

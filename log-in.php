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
    <form class="form-signin" method="POST" action="log-in-handler.php">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="username" id="inputEmail" class="form-control" placeholder="Email address" value="<?php echo @$_SESSION['email'];?>" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="register.php">Register</a>
    </form>
  </div>
</body>

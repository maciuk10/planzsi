<?php
if (isset($_COOKIE['login_successful'])){
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - Plan ZSI</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Zaloguj się</h2>
        <label for="inputEmail" class="sr-only">Adres Email:</label>
        <input type="email" id="inputEmail" class="form-control login_field" name="login_field" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Hasło:</label>
        <input type="password" id="inputPassword" class="form-control password_field" name="password_field" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block btn-submit" type="submit">Zaloguj</button>
      </form>
      <div class="alert alert-danger login_status"></div>
    </div>


    <div class="modal"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>

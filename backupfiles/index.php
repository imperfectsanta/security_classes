<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MY DAMN COOL WEBSITE</title>
  </head>
  <body>
<h1>SIGN UP ON MY DAMN COOL WEBSITE</h1>
      <form action="index.php" method="post">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <input type="text" name="email" placeholder="Email">
          <button>Sign Up</button>
      </form>

  </body>
</html>

<?php

if( isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) ){
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email    = $_POST["email"];

      $password = "";
      
}

?>

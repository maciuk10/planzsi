<?php
include "db_connect.php";

$login = $_POST['login'];
$password = $_POST['password'];
$correct = false;
$q = mysql_query("SELECT * FROM admin_users") or die("Zła query");
if (mysql_num_rows($q) > 0){
  while($record = mysql_fetch_assoc($q)){
    if ($login == $record['admin_login'] && md5($password) == $record['admin_password']){
      $correct = !$correct;
      break;
    }
  }
}
if ($correct){
  setcookie('login_successful', $correct, time()+3600, "/");
  echo "dashboard.php"." "."OK";
}else {
  echo "index.php"." "."Niepoprawne dane logowania";
}
?>

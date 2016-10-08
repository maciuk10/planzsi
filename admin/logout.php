<?php
  setcookie('login_successful','',time()-3600, '/');
  if(isset($_COOKIE['plan_to_show'])){
    setcookie('plan_to_show','',time()-3600, '/');
  }
  echo "index.php";
?>

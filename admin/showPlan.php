<?php
if (isset($_COOKIE['plan_to_show'])){
  $class = $_POST['selectVal'];
  setcookie('plan_to_show','',time()-3600, '/');
  setcookie('plan_to_show',$class,time()+3600, '/');
}else {
  $class = $_POST['selectVal'];
  setcookie('plan_to_show',$class,time()+3600, '/');
}
?>

<?php
include "db_connect.php";
$elementType = $_POST['elementType'];
$elementValue = $_POST['elementValue'];
switch ($elementType) {
  case 'cl':
    $execq = mysql_query("SELECT class_name FROM classes WHERE class_shortcut='".$elementValue."'");
    $class_full_name = '';
    while($classname = mysql_fetch_assoc($execq)){ $class_full_name = $classname['class_name']; }
    echo $class_full_name;
    break;
  case 't':
      # code...
    break;
  case 'cr':
        # code...
    break;
}
?>

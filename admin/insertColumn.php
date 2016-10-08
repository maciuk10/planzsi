<?php
include "db_connect.php";
$choosen = array();
for ($i = 1; $i <= 120; $i++){
  if ($_POST['sb'.$i] != ''){
    array_push($choosen, $i);
  }
}
var_dump($choosen);
echo "<br />";
$cnt = count($choosen);
for ($i = 0; $i < $cnt; $i++){
  $sb_q = mysql_query("SELECT subject_id FROM subjects WHERE subject_shortcut LIKE '".$_POST['sb'.$choosen[$i]]."'") or die (mysql_error());
  $t_q = mysql_query("SELECT teacher_id FROM teachers WHERE teacher_shortcut LIKE '".$_POST['t'.$choosen[$i]]."'") or die (mysql_error());
  $cr_q = mysql_query("SELECT classroom_id FROM classrooms WHERE classroom_val LIKE '".$_POST['cr'.$choosen[$i]]."'") or die (mysql_error());
  $cl_q = mysql_query("SELECT class_group_id FROM classes_with_groups WHERE class_group_name LIKE '".$_POST['cl'.$choosen[$i]]."'") or die (mysql_error());
  while ($record = mysql_fetch_assoc($sb_q)){ $sb_id = $record['subject_id']; };
  while ($record = mysql_fetch_assoc($t_q)){ $t_id = $record['teacher_id']; };
  while ($record = mysql_fetch_assoc($cr_q)){ $cr_id = $record['classroom_id']; };
  while ($record = mysql_fetch_assoc($cl_q)){ $cl_id = $record['class_group_id']; };
  $returnedFromFunction = getDayAndHour($choosen[$i]);
  $data_arr = explode('-', $returnedFromFunction);
  $use_zsi = mysql_query("use zsi_db");
  $insert = mysql_query("INSERT INTO schedule (day_id, class_id, subject_id, teacher_id, classroom_id, hour_id) VALUES ('".$data_arr[0]."','".$cl_id."','".$sb_id."','".$t_id."','".$cr_id."','".$data_arr[1]."')") or die (mysql_error());
  if (!mysql_error()){
    echo "Dodano rekordy do bazy danych";
    header("refresh:5; url=table.php");
  }
}


function getDayAndHour($sbNumber){
  $d = 0;
  $h = 0;
  if ($sbNumber >= 1 && $sbNumber <= 24){
    $d = 1;
    if ($sbNumber % 2 == 0){
      $h = $sbNumber / 2;
    }else {
      $h = ($sbNumber + 1) / 2;
    }
  }elseif ($sbNumber > 24 && $sbNumber <= 48){
    $d = 2;
    if ($sbNumber % 2 == 0){
      $h = (($sbNumber - 25) + 1) / 2;
    }else {
      $h = (($sbNumber - 25) + 2) / 2;
    }
  }elseif ($sbNumber > 48 && $sbNumber <= 72){
    $d = 3;
    if ($sbNumber % 2 == 0){
      $h = (($sbNumber - 49) + 1) / 2;
    }else {
      $h = (($sbNumber - 49) + 2) / 2;
    }
  }elseif ($sbNumber > 72 && $sbNumber <= 96){
    $d = 4;
    if ($sbNumber % 2 == 0){
      $h = (($sbNumber - 73) + 1) / 2;
    }else {
      $h = (($sbNumber - 73) + 2) / 2;
    }
  }elseif ($sbNumber > 96 && $sbNumber <= 120){
    $d = 5;
    if ($sbNumber % 2 == 0){
      $h = (($sbNumber - 97) + 1) / 2;
    }else {
      $h = (($sbNumber - 97) + 2) / 2;
    }
  }
  return $d."-".$h;

}

?>

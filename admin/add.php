<?php
include "db_connect.php";
$d = $_POST['d_name'];
$c = $_POST['class_name'];
$t = $_POST['teacher_name'];
$s = $_POST['subject_name'];
$cr = $_POST['classroom_name'];
$h = $_POST['hour_name'];

$day_id = mysql_query("SELECT day_id FROM days WHERE day_name LIKE '".$d."'") or die(mysql_error());
$class_id = mysql_query("SELECT class_group_id FROM classes_with_groups WHERE class_group_name LIKE '".$c."'") or die(mysql_error());
$teacher_id = mysql_query("SELECT teacher_id FROM teachers WHERE teacher_shortcut LIKE '".$t."'") or die(mysql_error());
$subject_id = mysql_query("SELECT subject_id FROM subjects WHERE subject_shortcut LIKE '".$s."'") or die(mysql_error());
$classroom_id = mysql_query("SELECT classroom_id FROM classrooms WHERE classroom_val LIKE '".$cr."'") or die(mysql_error());
$hour_id = mysql_query("SELECT hour_id FROM hours WHERE hour_range LIKE '".$h."'") or die(mysql_error());

$day_val = mysql_fetch_assoc($day_id);
$class_val = mysql_fetch_assoc($class_id);
$teacher_val = mysql_fetch_assoc($teacher_id);
$subject_val = mysql_fetch_assoc($subject_id);
$classroom_val = mysql_fetch_assoc($classroom_id);
$hour_val = mysql_fetch_assoc($hour_id);

$day = $day_val['day_id'];
$class = $class_val['class_group_id'];
$teacher = $teacher_val['teacher_id'];
$subject = $subject_val['subject_id'];
$classroom = $classroom_val['classroom_id'];
$hour = $hour_val['hour_id'];

$insert = mysql_query("INSERT INTO schedule (day_id, class_id, subject_id, teacher_id, classroom_id, hour_id) VALUES ($day, $class, $subject, $teacher, $classroom, $hour)");

if ($insert){
  echo "OK";
}else {
  echo "Wystąpił błąd sql";
}

?>

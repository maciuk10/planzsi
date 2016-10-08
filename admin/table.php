<?php
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/table.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <form class="form-inline send_line" method="post" action="insertColumn.php">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>LP</th>
          <th>Godzina</th>
          <th>Poniedziałek</th>
          <th>Wtorek</th>
          <th>Środa</th>
          <th>Czwartek</th>
          <th>Piątek</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>7:30- 8:15</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb1"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t1"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr1"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl1"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb2"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t2"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr2"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl2"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb25"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t25"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr25"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl25"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb26"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t26"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr26"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl26"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb49"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t49"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr49"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl49"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb50"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t50"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr50"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl50"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb73"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t73"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr73"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl73"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb74"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t74"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr74"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl74"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb97"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t97"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr97"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl97"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb98"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t98"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr98"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl98"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>8:20- 9:05</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb3"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t3"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr3"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl3"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb4"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t4"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr4"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl4"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb27"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t27"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr27"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl27"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb28"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t28"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr28"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl28"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb51"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t51"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr51"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl51"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb52"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t52"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr52"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl52"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb75"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t75"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr75"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl75"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb76"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t76"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr76"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl76"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb99"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t99"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr99"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl99"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb100"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t100"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr100"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl100"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>9:10- 9:55</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb5"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t5"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr5"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl5"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb6"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t6"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr6"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl6"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb29"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t29"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr29"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl29"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb30"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t30"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr30"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl30"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb53"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t53"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr53"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl53"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb54"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t54"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr54"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl54"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb77"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t77"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr77"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl77"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb78"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t78"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr78"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl78"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb101"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t101"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr101"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl101"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb102"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t102"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr102"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl102"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>10:05-10:50</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb7"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t7"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr7"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl7"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb8"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t8"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr8"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl8"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb31"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t31"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr31"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl31"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb32"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t32"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr32"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl32"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb55"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t55"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr55"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl55"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb56"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t56"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr56"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl56"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb79"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t79"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr79"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl79"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb80"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t80"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr80"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl80"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb103"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t103"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr103"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl103"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb104"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t104"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr104"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl104"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>11:10-11:55</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb9"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t9"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr9"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl9"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb10"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t10"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr10"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl10"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb33"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t33"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr33"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl33"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb34"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t34"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr34"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl34"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb57"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t57"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr57"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl57"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb58"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t58"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr58"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl58"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb81"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t81"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr81"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl81"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb82"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t82"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr82"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl82"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb105"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t105"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr105"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl105"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb106"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t106"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr106"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl106"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>12:00-12:45</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb11"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t11"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr11"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl11"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb12"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t12"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr12"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl12"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb35"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t35"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr35"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl35"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb36"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t36"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr36"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl36"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb59"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t59"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr59"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl59"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb60"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t60"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr60"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl60"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb83"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t83"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr83"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl83"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb84"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t84"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr84"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl84"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb107"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t107"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr107"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl107"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb108"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t108"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr108"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl108"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>12:55-13:40</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb13"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t13"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr13"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl13"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb14"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t14"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr14"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl14"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb37"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t37"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr37"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl37"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb38"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t38"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr38"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl38"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb61"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t61"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr61"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl61"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb62"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t62"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr62"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl62"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb85"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t85"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr85"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl85"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb86"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t86"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr86"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl86"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb109"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t109"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr109"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl109"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb110"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t110"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr110"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl110"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>8</td>
          <td>13:50-14:35</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb15"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t15"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr15"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl15"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb16"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t16"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr16"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl16"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb39"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t39"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr39"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl39"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb40"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t40"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr40"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl40"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb63"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t63"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr63"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl63"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb64"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t64"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr64"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl64"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb87"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t87"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr87"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl87"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb88"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t88"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr88"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl88"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb111"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t111"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr111"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl111"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb112"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t112"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr112"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl112"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>9</td>
          <td>14:45-15:30</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb17"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t17"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr17"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl17"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb18"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t18"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr18"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl18"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb41"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t41"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr41"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl41"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb42"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t42"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr42"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl42"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb65"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t65"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr65"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl65"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb66"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t66"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr66"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl66"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb89"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t89"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr89"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl89"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb90"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t90"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr90"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl90"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb113"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t113"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr113"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl113"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb114"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t114"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr114"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl114"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>10</td>
          <td>15:35-16:20</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb19"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t19"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr19"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl19"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb20"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t20"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr20"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl20"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb43"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t43"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr43"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl43"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb44"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t44"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr44"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl44"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb67"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t67"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr67"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl67"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb68"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t68"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr68"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl68"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb91"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t91"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr91"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl91"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb92"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t92"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr92"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl92"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb115"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t115"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr115"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl115"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb116"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t116"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr116"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl116"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>11</td>
          <td>16:25-17:10</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb21"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t21"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr21"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl21"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb22"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t22"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr22"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl22"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb45"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t45"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr45"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl45"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb46"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t46"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr46"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl46"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb69"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t69"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr69"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl69"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb70"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t70"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr70"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl70"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb93"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t93"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr93"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl93"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb94"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t94"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr94"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl94"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb117"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t117"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr117"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl117"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb118"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t118"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr118"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl118"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>12</td>
          <td>17:15-18:00</td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb23"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t23"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr23"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl23"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb24"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t24"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr24"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl24"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb47"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t47"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr47"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl47"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb48"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t48"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr48"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl48"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb71"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t71"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr71"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl71"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb72"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t72"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr72"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl72"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb95"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t95"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr95"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl95"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb96"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t96"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr96"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl96"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
          <td>
            <select class="form-control pad-sm input-sm" name="sb119"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t119"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr119"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl119"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select><br />
            <select class="form-control pad-sm input-sm" name="sb120"><?php $s = mysql_query("SELECT subject_shortcut FROM subjects"); echo "<option></option>"; while($rec = mysql_fetch_assoc($s)){ echo "<option>".$rec['subject_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="t120"><?php $t = mysql_query("SELECT teacher_shortcut FROM teachers"); echo "<option></option>"; while($rec = mysql_fetch_assoc($t)){ echo "<option>".$rec['teacher_shortcut']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cr120"><?php $cr = mysql_query("SELECT classroom_val FROM classrooms"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cr)){ echo "<option>".$rec['classroom_val']."</option>"; } ?>
            </select>
            <select class="form-control pad-sm input-sm" name="cl120"><?php $cl = mysql_query("SELECT class_group_name FROM classes_with_groups WHERE class_group_name LIKE '2DT%'"); echo "<option></option>"; while($rec = mysql_fetch_assoc($cl)){ echo "<option>".$rec['class_group_name']."</option>"; } ?>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="text-center">
      <button class="btn btn-success" type="submit">Wykonaj</button>
    </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>

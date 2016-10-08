<?php
if (!isset($_COOKIE['login_successful'])){
  header("Location: index.php");
}
include "db_connect.php";
$d = mysql_query("SELECT day_name FROM days") or die (mysql_error());
$c = mysql_query("SELECT class_group_name FROM classes_with_groups") or die (mysql_error());
$s = mysql_query("SELECT subject_shortcut FROM subjects") or die (mysql_error());
$t = mysql_query("SELECT teacher_shortcut FROM teachers") or die (mysql_error());
$cr = mysql_query("SELECT classroom_val FROM classrooms") or die (mysql_error());
$h = mysql_query("SELECT hour_range FROM hours") or die (mysql_error());
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Plan ZSI</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dashboard.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Plan ZSI - Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Zmień hasło</a></li>
          </ul>
          <form class="form-logout navbar-form navbar-right">
            <button class="btn btn-danger" type="submit">Wyloguj</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a data-toggle="pill" href="#main">Strona Główna <span class="sr-only">(current)</span></a></li>
            <li><a data-toggle="pill" href="#plan">Zarządzanie planem - pojedynczy wpis</a></li>
            <li><a data-toggle="pill" href="#plan_table" class="plan_table">Zarządzanie planem - tabela</a></li>
            <li><a data-toggle="pill" href="#teachers">Zarządzanie nauczycielami</a></li>
            <li><a data-toggle="pill" href="#classes">Zarządzanie klasami i grupami</a></li>
            <li><a data-toggle="pill" href="#subjects">Zarządzanie przedmiotami</a></li>
            <li><a data-toggle="pill" href="#classrooms">Zarządzanie salami</a></li>
            <li><a data-toggle="pill" href="#days">Dni tygodnia</a></li>
            <li><a data-toggle="pill" href="#hours">Godziny lekcyjne</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="tab-content">
            <div id="main" class="tab-pane fade in active">
              <div class="container">
                <div class="row rowMargin">
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#plan">Zarządzanie planem</a>
                  </div>
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#teachers">Zarządzanie nauczycielami</a>
                  </div>
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#classes">Zarządzanie klasami</a>
                  </div>
                </div>
                <div class="row rowMargin">
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#subjects">Zarządzanie przedmiotami</a>
                  </div>
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#classrooms">Zarządzanie salami</a>
                  </div>
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#days">Zarządzanie tygodniem</a>
                  </div>
                </div>
                <div class="row rowMargin">
                  <div class="col-xs-4"></div>
                  <div class="col-xs-4">
                    <a class="btn btn-square btn-lg btn-primary" data-toggle="pill" href="#hours">Zarządzanie godz lekcyjnymi</a>
                  </div>
                  <div class="col-xs-4"></div>
                </div>
              </div>
            </div>
            <div id="plan" class="tab-pane fade">
                    <form class="form-inline add-schema-row">
                      <div class="form-group">
                        <select class="form-control d">
                          <?php
                            if (mysql_num_rows($d) > 0){
                              while($rec = mysql_fetch_assoc($d)){
                                echo "<option>".$rec['day_name']."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control c">
                          <?php
                            if (mysql_num_rows($c) > 0){
                              while($rec = mysql_fetch_assoc($c)){
                                echo "<option>".$rec['class_group_name']."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control s">
                          <?php
                            if (mysql_num_rows($s) > 0){
                              while($rec = mysql_fetch_assoc($s)){
                                echo "<option>".$rec['subject_shortcut']."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control t">
                          <?php
                            if (mysql_num_rows($t) > 0){
                              while($rec = mysql_fetch_assoc($t)){
                                echo "<option>".$rec['teacher_shortcut']."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control cr">
                          <?php
                            if (mysql_num_rows($cr) > 0){
                              while($rec = mysql_fetch_assoc($cr)){
                                echo "<option>".$rec['classroom_val']."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control h">
                          <?php
                            if (mysql_num_rows($h) > 0){
                              while($rec = mysql_fetch_assoc($h)){
                                echo "<option>".$rec['hour_range']."</option>";
                              }
                            }
                          ?>
                        </select>
                      </div>
                      <button class="btn btn-success" type="submit">Dodaj</button>
                    </form>
            </div>
            <div id="plan_table" class="tab-pane fade plan_reload">
              <form class="form showPlan">
              <div class="form-group">
                <select class="form-control showPlanSelect">
                  <?php
                  $c2 = mysql_query("SELECT class_shortcut FROM classes") or die (mysql_error());
                  if (mysql_num_rows($c2) > 0){
                    echo "<option>--- WYBIERZ KLASĘ: ----</option>";
                    while($rec = mysql_fetch_assoc($c2)){
                      echo "<option>".$rec['class_shortcut']."</option>";
                    }
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <button class="btn btn-primary showClass" type="submit">Zmień</button>
              </div>
              </form>
              <h1 class="text-center text-primary">Plan klasy: <?php echo $_COOKIE['plan_to_show']; ?></h1>
              <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>LP</th>
        <th>Godz</th>
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
        <td><?php
        $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=1 AND d.day_id=1;');
        if (mysql_num_rows($td1) > 0){
          while($record = mysql_fetch_assoc($td1)){
            echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
          }
        }
        ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=1 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=1 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=1 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=1 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>8:20- 9:05</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=2 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=2 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=2 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=2 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=2 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>9:10- 9:55</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=3 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=3 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=3 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=3 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=3 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>10:05- 10:50</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=4 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=4 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=4 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=4 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=4 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>11:10- 11:55</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=5 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=5 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=5 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=5 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=5 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>6</td>
        <td>12:00- 12:45</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=6 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=6 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=6 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=6 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=6 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>7</td>
        <td>12:55- 13:40</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=7 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=7 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=7 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=7 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=7 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>8</td>
        <td>13:50- 14:35</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=8 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=8 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=8 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=8 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=8 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>9</td>
        <td>14:45- 15:30</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=9 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=9 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=9 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=9 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=9 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>10</td>
        <td>15:35- 16:20</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=10 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=10 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=10 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=10 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=10 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>11</td>
        <td>16:25- 17:10</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=11 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=11 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=11 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=11 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=11 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>12</td>
        <td>17:15- 18:00</td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=12 AND d.day_id=1;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=12 AND d.day_id=2;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=12 AND d.day_id=3;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=12 AND d.day_id=4;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
        <td>
          <?php
          $td1 = mysql_query('select sb.subject_shortcut, t.teacher_shortcut, cr.classroom_val, cg.class_group_name from schedule s, subjects sb, teachers t, classrooms cr, hours h, days d, classes_with_groups cg where s.subject_id = sb.subject_id AND s.teacher_id = t.teacher_id AND s.classroom_id=cr.classroom_id AND s.hour_id = h.hour_id AND s.day_id = d.day_id AND s.class_id = cg.class_group_id AND cg.class_group_name LIKE "'.$_COOKIE['plan_to_show'].'%" AND h.hour_id=12 AND d.day_id=5;');
          if (mysql_num_rows($td1) > 0){
            while($record = mysql_fetch_assoc($td1)){
              echo "<p>".$record['subject_shortcut']." <span class='label label-success'>".$record['teacher_shortcut']."</span> <span class='label label-primary'>".$record['classroom_val']."</span> <span class='label label-warning'>".$record['class_group_name']."</span>"."</p>";
            }
          }
          ?>
        </td>
      </tr>
    </tbody>
  </table>
            </div>
            <div id="teachers" class="tab-pane fade">
              <?php
                $t_all = mysql_query("SELECT * FROM teachers") or die (mysql_error());
                if(mysql_num_rows($t_all) > 0){
                  echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>Teacher_id</th>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Skrót</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form class='form'>";
                  while ($record = mysql_fetch_assoc($t_all)){
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['teacher_id']."' disabled/></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['teacher_surname']."' /></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['teacher_name']."' /></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['teacher_shortcut']."' /></td>";
                    echo "<td><button class='btn btn-warning' type='submit'><i class='fa fa-pencil-square' aria-hidden='true'></i></button> <button class='btn btn-danger' type='submit'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
                    echo "</tr>";
                  }
                  echo "</form></tbody></table>";
                }
              ?>
            </div>
            <div id="classes" class="tab-pane fade">
              <?php
                $c = mysql_query("SELECT * FROM classes_with_groups") or die (mysql_error());
                if(mysql_num_rows($c) > 0){
                  echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>ID Klasy</th>
                        <th>Skrót</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form class='form'>";
                  while ($record = mysql_fetch_assoc($c)){
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['class_group_id']."' disabled/></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['class_group_name']."' /></td>";
                    echo "<td><button class='btn btn-warning' type='submit'><i class='fa fa-pencil-square' aria-hidden='true'></i></button> <button class='btn btn-danger' type='submit'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
                    echo "</tr>";
                  }
                  echo "</form></tbody></table>";
                }
              ?>
            </div>
            <div id="subjects" class="tab-pane fade">
              <?php
                $s = mysql_query("SELECT * FROM subjects") or die (mysql_error());
                if(mysql_num_rows($s) > 0){
                  echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>ID Przedmiotu</th>
                        <th>Nazwa</th>
                        <th>Skrót</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form class='form'>";
                  while ($record = mysql_fetch_assoc($s)){
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['subject_id']."' disabled/></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['subject_name']."' /></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['subject_shortcut']."' /></td>";
                    echo "<td><button class='btn btn-warning' type='submit'><i class='fa fa-pencil-square' aria-hidden='true'></i></button> <button class='btn btn-danger' type='submit'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
                    echo "</tr>";
                  }
                  echo "</form></tbody></table>";
                }
              ?>
            </div>
            <div id="classrooms" class="tab-pane fade">
              <?php
                $cr = mysql_query("SELECT * FROM classrooms") or die (mysql_error());
                if(mysql_num_rows($cr) > 0){
                  echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>ID Sali</th>
                        <th>Numer Sali</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form class='form'>";
                  while ($record = mysql_fetch_assoc($cr)){
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['classroom_id']."' disabled/></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['classroom_val']."' /></td>";
                    echo "<td><button class='btn btn-warning' type='submit'><i class='fa fa-pencil-square' aria-hidden='true'></i></button> <button class='btn btn-danger' type='submit'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
                    echo "</tr>";
                  }
                  echo "</form></tbody></table>";
                }
              ?>
            </div>
            <div id="days" class="tab-pane fade">
              <?php
                $d = mysql_query("SELECT * FROM days") or die (mysql_error());
                if(mysql_num_rows($d) > 0){
                  echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>ID Dnia</th>
                        <th>Dzień tygodnia</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form class='form'>";
                  while ($record = mysql_fetch_assoc($d)){
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['day_id']."' disabled/></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['day_name']."' /></td>";
                    echo "<td><button class='btn btn-warning' type='submit'><i class='fa fa-pencil-square' aria-hidden='true'></i></button> <button class='btn btn-danger' type='submit'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
                    echo "</tr>";
                  }
                  echo "</form></tbody></table>";
                }
              ?>
            </div>
            <div id="hours" class="tab-pane fade">
              <?php
                $h = mysql_query("SELECT * FROM hours") or die (mysql_error());
                if(mysql_num_rows($h) > 0){
                  echo "<table class='table'>
                    <thead>
                      <tr>
                        <th>ID Dnia</th>
                        <th>Dzień tygodnia</th>
                        <th>Edycja</th>
                      </tr>
                    </thead>
                    <tbody>
                    <form class='form'>";
                  while ($record = mysql_fetch_assoc($h)){
                    echo "<tr>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['hour_id']."' disabled/></td>";
                    echo "<td><input type='text' class='form-control' name='teacher_id' value='".$record['hour_range']."' /></td>";
                    echo "<td><button class='btn btn-warning' type='submit'><i class='fa fa-pencil-square' aria-hidden='true'></i></button> <button class='btn btn-danger' type='submit'><i class='fa fa-trash' aria-hidden='true'></i></button></td>";
                    echo "</tr>";
                  }
                  echo "</form></tbody></table>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p class="modal_desc text-center"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Następny wpis</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>

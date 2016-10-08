<?php
  include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Mobile</title>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="scripts/jquery.mobile-1.4.5.js"></script>
    <script src="scripts/jquery.list.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400" rel="stylesheet">
    <script src="scripts/script.js"></script>
  </head>
  <body>
    <!--  Strona startowa -->
    <div id="home" data-role="page" data-title="Start">
      <div data-role="header" class="borderTransparent header-bottom" data-fullscreen="false" style="border-top: 0px; border-top-width: 0px" data-position="fixed">
        <div class="ui-grid-a">
          <div class="ui-block-a ui-block-mini-btn">
            <a href="#dashboard" data-role="button" role="button" class="dashboard-btn"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
          </div>
          <div class="ui-block-b ui-block-mini-form">
            <form class="searchForSchemas ui-filterable" role="search">
              <input type="text" id="searchForSchemas" name="schema_search" class="schema_search" placeholder="Szukaj planu:" data-type="search" />
            </form>
          </div>
        </div>
      </div>
      <div data-role="content" class="stickyWithDivider">
        <ul data-role="listview" data-filter="true" data-input="#searchForSchemas">
          <?php
              echo "<li data-role='list-divider' class='list-divider fira_sans'>Klasy</li>";
            $cl = mysql_query("SELECT * FROM classes") or die (mysql_error());
            while($record = mysql_fetch_assoc($cl)){ echo '<li class="ui-li ui-li-has-thumb"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="#plan_cl_'.$record['class_shortcut'].'" class="ui-link-inherit item_decor"> <div class="ui-li-thumb fira_sans">'.$record['class_shortcut'].'</div><h3 class="ui-li-heading item_heading fira_sans">'.$record['class_name'].'</h3></a></div></div></li>'; };
              echo "<li data-role='list-divider' class='list-divider fira_sans'>Nauczyciele</li>";
            $t = mysql_query("SELECT * FROM teachers") or die (mysql_error());
            while($record = mysql_fetch_assoc($t)){ echo '<li class="ui-li ui-li-has-thumb"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="#plan_t_'.$record['teacher_shortcut'].'" class="ui-link-inherit item_decor"> <div class="ui-li-thumb fira_sans">'.$record['teacher_shortcut'].'</div><h3 class="ui-li-heading item_heading fira_sans">'.$record['teacher_surname'].' '.$record['teacher_name'].'</h3></a></div></div></li>'; };
              echo "<li data-role='list-divider' class='list-divider fira_sans'>Sale</li>";
              $cr = mysql_query("SELECT * FROM classrooms") or die (mysql_error());
              while($record = mysql_fetch_assoc($cr)){ echo '<li class="ui-li ui-li-has-thumb"><div class="ui-btn-inner ui-li"><div class="ui-btn-text"><a href="#plan_cr_'.$record['classroom_val'].'" class="ui-link-inherit item_decor"> <div class="ui-li-thumb fira_sans">'.$record['classroom_val'].'</div><h3 class="ui-li-heading item_heading fira_sans">'.$record['classroom_val'].' '.$record['teacher_name'].'</h3></a></div></div></li>'; };
          ?>
        </ul>
      </div>
      <div data-role="panel" id="dashboard" data-display="overlay"> <!-- reveal lub push dla data-display -->
        <form id="loginForm">
          <label for="user">Użytkownik</label>
          <input type="text" id="user" name="user" />
          <label for="password">Hasło</label>
          <input type="password" id="password" name="password" />
          <input type="submit" value="Zaloguj" data-icon="check" class="login_btn" />
          <a href="#home" data-rel="close" data-role="button" data-icon="back" class="hide_panel">Zamknij panel</a>
        </form>
      </div>
    </div>
    <!-- Plan klasy -->
    <div id="plan_cl_" data-role="page" data-title="Plan Klasy">
      <div data-role="header">
        <a href="#home" data-icon="home" data-iconpos="notext">Start</a>
      </div>
      <div data-role="content"></div>
      <div data-role="footer" data-position="fixed"></div>
    </div>
    <!-- Plan nauczyciela -->
    <div id="plan_cl_" data-role="page" data-title="Plan Klasy">
      <div data-role="header">
        <a href="#home" data-icon="home" data-iconpos="notext">Start</a>
      </div>
      <div data-role="content"></div>
      <div data-role="footer" data-position="fixed"></div>
    </div>
    <!-- Plan sali -->
    <div id="plan_cl_" data-role="page" data-title="Plan Klasy">
      <div data-role="header">
        <a href="#home" data-icon="home" data-iconpos="notext">Start</a>
      </div>
      <div data-role="content"></div>
      <div data-role="footer" data-position="fixed"></div>
    </div>

    <!-- Strona ustawienia -->
    <div id="settings" data-role="page" data-title="Ustawienia">
      <div data-role="header">
        <a href="#home" data-icon="home" data-iconpos="notext">Start</a>
        <h1>Ustawienia</h1>
      </div>
      <div data-role="content">
        <form id="settings-form" method="get" action="#">
          <div data-role="fieldcontain">
            <label for="showLatest">Pokaż najnowsze produkty:</label>
            <select id="showLatest" name="showLatest" data-role="slider">
              <option value="on">Tak</option>
              <option value="off">Nie</option>
            </select>
          </div>
          <div data-role="fieldcontain">
            <div data-role="controlgroup" data-type="horizontal">
              <legend>Ilość wpisów na stronie</legend>
              <label for="op1">5</label>
              <input type="radio" name="nopost" id="op1" value="op1" />
              <label for="op2">10</label>
              <input type="radio" name="nopost" id="op2" value="op2" />
              <label for="op3">15</label>
              <input type="radio" name="nopost" id="op3" value="op3" />
              <label for="op4">20</label>
              <input type="radio" name="nopost" id="op4" value="op4" />
            </div>
          </div>
          <div data-role="fieldcontain">
            <div data-role="controlgroup" data-type="vertical">
              <legend>Wybierz kategorię produktów</legend>
              <label for="cat1">Programowanie</label>
              <input type="checkbox" name="nopost" id="cat1" />
              <label for="cat2">Web Develop</label>
              <input type="checkbox" name="nopost" id="cat2" />
              <label for="cat3">Web Design</label>
              <input type="checkbox" name="nopost" id="cat3" />
              <label for="cat4">Grafika</label>
              <input type="checkbox" name="nopost" id="cat4" />
            </div>
          </div>
          <div data-role="fieldcontain">
            <legend>Ilość filmów w jednej kategorii</legend>
            <label for="slider"></label>
            <input type="range" name="slider" id="slider" value="50" min="1" max="100" />
          </div>
        </form>
      </div>
      <div data-role="footer" data-position="fixed">
        <div data-role="content">
          <p>
            <a href="#home" data-icon="back" data-role="button" class="ui-btn-left">Wróć</a>
          </p>
        </div>
      </div>
    </div>
    <!-- Intro ustawienia -->
    <div id="introSettings" data-role="page" data-title="Potwierdzenie ustawień">
      <div data-role="header">
        <h1>Ostrzeżenie</h1>
      </div>
      <div data-role="content">
        <h2>Czy na pewno chcesz zmienić ustawienia?</h2>
        <p>Edycja ustawień może doprowadzić do nieprawidłowego działania aplikacji.</p>
        <a href="#settings" data-role="button">Tak, chcę przejść do ustawień</a>
        <a href="#home" data-role="button">Rezygnuję</a>
      </div>
    </div>
    <!-- Strona wiadomości -->
    <div id="messages" data-role="page" data-title="Wiadomości">
      <div data-role="header">
        <a href="#home" data-icon="home" data-iconpos="notext">Start</a>
        <h1>Wiadomości</h1>
      </div>
      <div data-role="content">
        <h2>Kategorie</h2>
        <ul data-role="listview">
          <li><a href="#">Odebrane <span class="ui-li-count">7</span></a></li>
          <li><a href="#">Wysyłane <span class="ui-li-count">10</span></a></li>
          <li><a href="#">Usunięte <span class="ui-li-count">3</span></a></li>
        </ul>
        <h2>Najnowsze</h2>
        <ul data-role="listview">
          <li data-role="list-divider">2016-10-09</li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li data-role="list-divider">2016-10-04</li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
        </ul>
      </div>
      <div data-role="footer" data-position="fixed">
        <div data-role="content">
          <p><a href="#home" data-icon="back" data-role="button" class="ui-btn-left">Wróć</a></p>
        </div>
      </div>
    </div>
    <!-- Strona pojedynczego posta -->
    <div id="post" data-role="page">
      <div data-role="header">
        <h1>Blog</h1>
        <a href="#blog" data-icon="back">Wróć</a>
      </div>
      <div data-role="content" id="post-wrapper">

      </div>
    </div>
  </body>
</html>

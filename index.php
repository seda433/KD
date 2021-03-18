<?php
session_start();
//session_destroy();
$str = file_get_contents('https://kodikapi.com/list?token=9cb0b4cec2fc036c105d79dbbb3ed254&types=foreign-serial,foreign-serial&with_episodes=true&with_material_data=true&sort=year&countries=Корея%20Южная&');
$json = json_decode($str, true);
$arr = [];
$_SESSION['str'] = ((isset($_SESSION['str'])) ? $_SESSION['str'] : $str);
$_SESSION['json'] = ((isset($_SESSION['json'])) ? $_SESSION['json'] : $json);
$_SESSION['arr'] = ((isset($_SESSION['arr'])) ? $_SESSION['arr'] : $arr);
if (!isset($_POST['title'])) {
  $_SESSION['str'] = file_get_contents($_SESSION['json']['next_page']);
  $_SESSION['json'] = json_decode($_SESSION['str'], true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <script src="https://kit.fontawesome.com/3db06fd29a.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Webpage</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3cba60e4e2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-fluid">
    
      <header id="top">
        <div class="container p-0">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">KD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="mr-auto"></div>
              <ul class="navbar-nav">
                <li class="nav-item active" id="active" style="background-color: red; ">
                  <a class="nav-link" href="#">Топ
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#katalog_doram">Каталог дорам</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Новиньки</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <? if (!isset($_POST['title'])) { ?>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-5 col-sm-12  text-white">
              <h1 class="title">Смотрите дорамы онлайн 
                и в хорошем качестве</h1>
                <div class="s008">
                  <form>
                    <div class="inner-form">
                      <div class="basic-search">
                        <div class="input-field">
                          <input id="search" type="text" placeholder="Поиск дорам..." />
                          <div class="icon-wrap">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                              <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                            </svg>
                          </div>
                          </div>
                          </div>
                        </div>
                    </form>
                  </div>
            </div>
            <div class="col-md-7 col-sm-12  h-25">
              <img src="img/main_image.png" alt="Book" />
            </div>
          </div>
        </div>
        <? } ?>
      </header>
    
    <div class="container" style="width: 100%;" id="katalog_doram">
      <? if(isset($_GET['next']) or $_SESSION['json']['prev_page'] == null or isset($_SESSION['json'])){ ?>
          <? foreach ($_SESSION['json']['results'] as &$value) { ?>
            <? if (isset($_POST['title'])) { break; } ?>
            <? if (in_array($value['title'], $_SESSION['arr']) or in_array('мультфильм', $value['material_data']['genres']) and isset($value['material_data']['description']) and $value['translation']['title'] == 'SoftBox') { ?>
              <? continue; ?>
            <? }else { ?>
              <? array_push($_SESSION['arr'], $value['title']); ?>
            <? } ?>
          <br><br><br><br><br>

          <div class="row d-flex" >
              <div class="col-md-6 col-sm-12 align-items-center text-white">
                <img src="<?= $value['material_data']['poster_url'] ?>" style="width: 300px;" alt="2">
              </div>
              <div class="col-md-6 col-sm-12 align-items-start text-white">
                  <h3><? echo $value['material_data']['title']; ?></h3>
                  <hr color="red" size="2px">
                  <table>
                      <li><strong>Количество серий:</strong>&nbsp;&nbsp;&nbsp;<? echo $value['last_episode'] . '/' . $value['episodes_count']; ?><br></li>
                      <li><strong>Продолжительность:</strong>&nbsp;&nbsp;&nbsp;<? echo $value['material_data']['duration'] . '&nbsp;' . 'мин.'; ?></li>
                      <li><strong>Страна:</strong>&nbsp;&nbsp;&nbsp; Южная Корея</li>
                      <li><strong>Жанр:&nbsp;&nbsp;&nbsp;</strong>
                      
                      <? foreach ($value['material_data']['genres'] as &$value_2) { ?>
                      <? echo $value_2 . ', '; ?>
                      <? $genres .= $value_2; ?>
                      <? } ?>
                      <? $genres .= "|"; ?>
                      </li>
                      <li><strong>Год:</strong>&nbsp;&nbsp;&nbsp;<? echo $value['year']; ?></li>
                      <li><strong>Перевод:&nbsp;&nbsp;&nbsp;</strong> Русская озвучка, Русские субтитры</li>
                      <li><strong>В ролях:&nbsp;&nbsp;&nbsp;</strong>
                      <? foreach ($value['material_data']['actors'] as &$value_2) { ?>
                      <? echo $value_2 . ', '; ?>
                      <? $actors .= $value_2; ?>
                      <? } ?>
                      <? $actors .= "|"; ?>
                      </li>
                  </table>
                  <form action="index2.php" method="post">
                    <a href="index2.php"><button class="btn btn-danger bg-transparent" type="submit" style="border-radius: 20px; margin-top: 3%;" name='title' value=" <?= $value['material_data']['title']; ?>" >Посмотреть</button></a>
                    <? if (isset($_POST['title'])) { break; } ?>
                  </form>
                  <? if (isset($_POST['title'])) { break; } ?>
              </div>
          </div>
              <br><br><br>
          
              <? } ?>
              <? } ?>
              <? if (!isset($_POST['title'])) { ?>
                <div class="container" style="min-height: 40px;">
                  <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="get">
                      <input class="btn btn-danger bg-red" type="submit" placeholder="next" name="next" style="border-radius: 20px; float:right;">
                      <!-- <button class="btn btn-danger bg-red" style="float:right; text-align:center; border-radius: 20px; margin-top: 7%;" value="next" name="next" type="submit">Следующая&nbsp;&nbsp;<i class="fas fa-arrow-right"></i></button> -->
                  </form>
                </div>
              
              <? } ?>
    </div>
  </div>
  <!-- Footer -->

<!-- Footer -->
</body>
</html>
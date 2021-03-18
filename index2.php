<?
include "index.php";

$str = str_replace(' ', '', $_POST['title']);
if(isset($_POST['title'])) {
  foreach ($_SESSION['json']['results'] as &$value) {
    $str_ = str_replace(' ', '', $value['material_data']['title']);
    if ($str_ == $str) { ?>
    <div class="container-fluid">
      <!-- <div class="row d-flex"> -->
      <br>
        <h3 style="color: white;"><? echo '&nbsp&nbsp' . $value['material_data']['title']; ?></h3>
        <hr color="red" size="2px">
        <br><br><br>
      <!-- </div> -->
    </div>
    
    <div class="container">
    <div class="row d-flex" >
            <div class="col-md-6 col-sm-12 align-items-center text-white">
              <img src="<?= $value['material_data']['poster_url'] ?>" style="width: 300px;" alt="2">
            </div>
            <div class="col-md-6 col-sm-12 align-items-start text-white">
                
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
            </div>
            
            <br><br><br>
        </div>
    </div>
    <div class="container">
      <!-- <div class="row d-flex"> -->
      <br>
        <h3 style="color: white;">Описание</h3>
        <hr color="red" size="2px">
      <!-- </div> -->
    </div>
    <div class="container">
        <p style="color: white; font-size:large;"><? echo $value['material_data']['description']; ?></p>
    </div>
    <div class="container d-flex justify-content-center">
    <iframe src="<?= "http:" . $value['link'] ?>" width="610" height="370" frameborder="0" allowfullscreen allow="autoplay *; fullscreen *"></iframe>
    </div>
        <? break; ?>
    <?}
  }
}
?>
<header>
<style>
header {
  background-image: none;
  min-height: 80px;
}
</style>
</header>
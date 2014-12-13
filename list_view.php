<?PHP header("Content-type: text/html; charset=utf8"); ?>
<?php
include('inc/config.php');
$id = $_GET['id'];
$id = abs($_GET['id']);
if (isset($_GET['id'])) {$id = $_GET['id'];}
if(!$result = mysql_query("SELECT id,name FROM anime WHERE id='$id'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<meta name="description" content="<?=$myrow['name']?>">
<meta name="keywords" content="<?=$myrow['name']?>">
  <title>Nyaka :: Описание аниме :: <?=$myrow['name']?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0"><!--Подключаем шапку сайта-->
  <tr>
    <td width="70%"><img alt="Nyaka" src="./img/logo.gif"/></td>
    <td width="30%"><?php include('blocks/stat.php'); ?></td>
  </tr>
</table>
<!--<hr align="center" color="006DA3">-->
<table width="100%" border="0"><!--Подключаем левый блок-->
  <tr>
    <td width="110px" valign="top">
	<?php include('blocks/left_block.php'); ?>
	<?php include('blocks/last.php'); ?>
    </td>
    <td align="left" valign="top">
<?php 
if(!$result = mysql_query("SELECT * FROM anime WHERE id='$id'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<h1><?=$myrow['name']?> / <?=$myrow['name_rus']?></h1>
<table width="70%"cellpadding="5" cellspacing="0" rules="all" class="bor">
  <tr>
    <td align="right" valign="center" class="heading">Скачать</td>
    <td><a href="./download"><?=$myrow['name']?></a></td>
  </tr>
  <tr>
    <td width="15%" align="right" valign="top" class="heading">Описание</td>
    <td width="85%">
<?=$myrow['images']?><br><br>
<b>Оригинальное название: </b><?=$myrow['name_orig']?><br>
<b>Английское название: </b><?=$myrow['name_eng']?><br>
<b>Русское название: </b><?=$myrow['name_rus']?><br><br>
<b>Страна: </b><?=$myrow['country']?><br>
<b>Год выпуска / период трансляции: </b><?=$myrow['year']?><br>
<b>Жанр: </b><?=$myrow['genre']?><br>
<b>Возрастное ограничение: </b><?=$myrow['age_limit']?><br><br>
<b>Категория: </b><?=$myrow['category']?><br>
<b>Количество эпизодов: </b><?=$myrow['kol_ep']?><br>
<b>Продолжительность: </b><?=$myrow['time']?><br>
<b>Студия: </b><?=$myrow['studios']?><br><br>
<b>Режиссёр: </b><?=$myrow['rezhiser']?><br>
<b>Сценарий: </b><?=$myrow['scenariy']?><br>
<b>Автор оригинала: </b><?=$myrow['avtor_orig']?><br>
<b>Композитор: </b><?=$myrow['kompozitor']?><br><br>
<b>Описание: </b><br><?=$myrow['text']?><br><br>
<b>Названия эпизодов:</b><?=$myrow['name_ep']?><br><br><br>
<b>Контейнер: </b><?=$myrow['file_type']?><br>
<b>Видео: </b><?=$myrow['video']?>, <?=$myrow['video_codec']?><br>
<b>Аудио: </b><?=$myrow['audio']?><br>
<b>Субтитры: </b><?=$myrow['sub']?><br>
<b>Формат: </b><?=$myrow['format']?><br>
<b>Перевод: </b><?=$myrow['translate']?><br>
<b>Озвучивание: </b><?=$myrow['ozvuchivanie']?><br>
<b>Комментарии: </b><?=$myrow['komments']?><br>    </td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">Тип</td>
    <td><?=$myrow['type']?></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">Размер</td>
    <td><?=$myrow['size']?> Mb (<?=number_format($myrow['size']*1024*1024, 0, ',', ',')?> bytes)</td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">Добавлен</td>
    <td><?=$myrow['date']?></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">Просмотров</td>
    <td> </td>
  </tr>
</table>
    </td>
    <td width="110px" valign="top"><?php include('blocks/right_block.php'); ?></td>
  </tr>
</table>
<!--<hr align="center" color="006DA3">-->
<!--Подключаем нижний блок-->
<?php include('blocks/footer.php');?>
</body>
</html>
<?php }?>
<?php }?>
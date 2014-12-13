<?PHP header("Content-type: text/html; charset=utf8"); ?>
<?php
include('inc/config.php');
$id = $_GET['id'];
$id = abs($_GET['id']);
if(!$result = mysql_query("SELECT title,meta_d,meta_k FROM settings WHERE page='index'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);}
?>
<html>
<head>
<meta name="description" content="<?=$myrow['meta_d']?>">
<meta name="keywords" content="<?=$myrow['meta_k']?>">
  <title><?=$myrow['title']?></title>
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
    <td align="center" valign="top">
    <h1>Статистика</h1>
<?php
$result = mysql_query("SELECT SUM(size) as 'all_size' FROM anime",$db);
while($myrow = mysql_fetch_array($result)){ ?>
	<table width="100%" style='border: solid #A2D7F1 1px;'>
    <td><h2>Статистика по базе:</h2>
Наименований: <b><a href="list.php"><? echo "$anime";?></a></b><br>
Общий объем:  <b><?=number_format($myrow['all_size']/1024/1024, 3, ',', '')?></b> Tb / <b><?=number_format($myrow['all_size']/1024, 3, ',', '')?></b> Gb<br>
<?php
$query = mysql_query( "SELECT * FROM `anime` WHERE `type` = 'TV'" );
echo '<br>TV: ' . mysql_num_rows( $query );

$query = mysql_query( "SELECT * FROM `anime` WHERE `type` = 'Movie'" );
echo '<br>Movie: ' . mysql_num_rows( $query );

$query = mysql_query( "SELECT * FROM `anime` WHERE `type` = 'OVA/OAV'" );
echo '<br>OVA/OAV: ' . mysql_num_rows( $query );

$query = mysql_query( "SELECT * FROM `anime` WHERE `type` = 'Special'" );
echo '<br>Special: ' . mysql_num_rows( $query );

$query = mysql_query( "SELECT * FROM `anime` WHERE `type` = 'Live Action'" );
echo '<br>Live Action: ' . mysql_num_rows( $query );
?>
</td>
      </table><br>
	<table width="100%" style='border: solid #A2D7F1 1px;'>
<td>
<h2>Статистика по сайту:</h2>
<?php //Выводим кол-во записей по каждой из таблиц
echo 'Аниме: ' . mysql_result(mysql_query( "SELECT COUNT(*) FROM anime"), 0) . '<br>';
echo 'Новостей: ' . mysql_result(mysql_query( "SELECT COUNT(*) FROM news"), 0) . '<br>';
?>
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
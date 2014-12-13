<?PHP header("Content-type: text/html; charset=utf8"); ?>
<?php
include('inc/config.php');
$id = $_GET['id'];
$id = abs($_GET['id']);
if (isset($_GET['id'])) {$id = $_GET['id'];}
if(!$result = mysql_query("SELECT id,title FROM news WHERE id='$id'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<meta name="description" content="<?=$myrow['meta_d']?>">
<meta name="keywords" content="<?=$myrow['meta_k']?>">
  <title>Nyaka :: Новости :: <?=$myrow['title']?></title>
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
    <td width="110px">
	<?php include('blocks/left_block.php'); ?>
	<?php include('blocks/last.php'); ?>
    </td>
    <td align="left" valign="top">
<?php 
if(!$result = mysql_query("SELECT * FROM news WHERE id='$id'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<h1><?=$myrow['title']?></h1>
<table width="500px" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><?=$myrow['text']?><br><br></td>
  </tr>
</table>
<table width="500px" border="1" cellspacing="0" cellpadding="5" rules="all" class="bor">
  <tr>
    <td width="100" align="right" valign="top" class="heading">Добавлен</td>
    <td width="374"><?=$myrow['date']?></td>
  <tr>
    <td align="right" valign="top" class="heading">Просмотров</td>
    <td>&nbsp;</td>
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
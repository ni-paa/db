<?php
include('inc/include.php');
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
  <title>Nyaka :: Новости :: <?=$myrow['name']?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0"><!--Подключаем шапку сайта-->
  <tr>
    <td width="70%"><img alt="Nyaka" src="./img/logo.gif"/></td>
    <td width="30%"><?php include('blocks/stat.php'); ?></td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--Подключаем левый блок-->
  <tr>
    <td width="130px"><?php include('blocks/left_block.php'); ?></td>
    <td align="left" valign="top" style='border: solid #A2D7F1 1px;'>
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
<table width="500px" border="1" cellspacing="0" cellpadding="5" rules="all">
  <tr>
    <td width="100" align="right" valign="top" class="heading">Добавлен</td>
    <td width="374"><?=$myrow['date']?></td>
  <tr>
    <td align="right" valign="top" class="heading">Просмотров</td>
    <td>&nbsp;</td>
  </tr>
</table>
    </td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--Подключаем нижний блок-->
  <tr>
    <td width="50%"><?php include('blocks/footer.php');?></td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }?>
<?php }?>
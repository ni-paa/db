<?PHP header("Content-type: text/html; charset=utf8"); ?>
<?php
include('inc/config.php');
$id = $_GET['id'];
$id = abs($_GET['id']);
if(!$result = mysql_query("SELECT title,meta_d,meta_k FROM settings WHERE page='index'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<meta name="description" content="<?=$myrow['meta_d']?>">
<meta name="keywords" content="<?=$myrow['meta_k']?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?=$myrow['title']?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0"><!--Подключаем шапку сайта-->
  <tr>
    <td width="70%"><img alt="Nyaka" src="./img/logo.gif"/></td>
    <td width="30%">
	<?php include('blocks/stat.php'); ?>
    </td>
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
    	<?php include('blocks/last_news.php'); ?>
    	
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
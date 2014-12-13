<?php
include("../inc/include.php");
$id = $_GET['id'];
$id = abs($_GET['id']);
if(!$result = mysql_query("SELECT title,meta_d,meta_k FROM settings WHERE page='news'",$db)){
	echo '<p>Ошибка выполнения запроса</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<meta name="description" content="<?=$myrow['meta_d']?>">
<meta name="keywords" content="<?=$myrow['meta_k']?>">
  <title><?=$myrow['title']?></title>
<link href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0"><!--Подключаем шапку сайта-->
  <tr>
    <td width="70%"><img alt="Nyaka" src="../../img/logo.gif"/></td>
    <td width="30%"><?php include('../blocks/stat.php'); ?></td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--Подключаем левый блок-->
  <tr>
    <td width="130px" valign="top"><?php include('../blocks/left_block.php'); ?></td>
    <td align="left" valign="top" style='border: solid #A2D7F1 1px;'>
<?php
$result = mysql_query("SELECT id,title,description,date,author FROM news",$db);
while($myrow = mysql_fetch_array($result)){
?>
<a href='view_news.php?id=<?=$myrow['id']?>'><i><?=$myrow['date']?></i> - <b><?=$myrow['title']?></b><br><?=$myrow['description']?></a><br>
<?php }?>
    </td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--Подключаем нижний блок-->
  <tr>
    <td width="50%"><?php include('../blocks/footer.php');?></td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }?>
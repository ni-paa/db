<?php
include('inc/include.php');
$id = $_GET['id'];
$id = abs($_GET['id']);
if(!$result = mysql_query("SELECT title,meta_d,meta_k FROM settings WHERE page='list'",$db)){
	echo '<p>������ ���������� �������</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<meta name="description" content="<?=$myrow['meta_d']?>">
<meta name="keywords" content="<?=$myrow['meta_k']?>">
  <title><?=$myrow['title']?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0"><!--���������� ����� �����-->
  <tr>
    <td width="70%"><img alt="Nyaka" src="./img/logo.gif"/></td>
    <td width="30%"><?php include('blocks/stat.php'); ?></td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--���������� ����� ����-->
  <tr>
    <td width="130px" valign="top"><?php include('blocks/left_block.php'); ?></td>
    <td align="left" valign="top" style='border: solid #A2D7F1 1px;'>
<?php
$result = mysql_query("SELECT id,name,size,type,video,video_codec,audio FROM anime",$db);
while($myrow = mysql_fetch_array($result)){
?>
<a href='view_list.php?id=<?=$myrow['id']?>'>0<?=$myrow['id']?>. <b><?=$myrow['name']?></b><br><?=$myrow['size']?> Mb :: <?=$myrow['type']?> :: <?=$myrow['video']?> :: <?=$myrow['video_codec']?> :: <?=$myrow['audio']?></a><br>
<?php }?>
    </td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--���������� ������ ����-->
  <tr>
    <td width="50%"><?php include('blocks/footer.php');?></td>
    <td width="50%">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }?>
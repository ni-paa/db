<?php
include('inc/include.php');
$id = $_GET['id'];
$id = abs($_GET['id']);
if (isset($_GET['id'])) {$id = $_GET['id'];}
if(!$result = mysql_query("SELECT id,name FROM anime WHERE id='$id'",$db)){
	echo '<p>������ ���������� �������</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<html>
<head>
<meta name="description" content="<?=$myrow['name']?>">
<meta name="keywords" content="<?=$myrow['name']?>">
  <title>Nyaka :: �������� ����� :: <?=$myrow['name']?></title>
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
if(!$result = mysql_query("SELECT * FROM anime WHERE id='$id'",$db)){
	echo '<p>������ ���������� �������</p>';
	exit; }
else {
$myrow = mysql_fetch_array($result);
?>
<h1><?=$myrow['name']?> / <?=$myrow['name_rus']?></h1>
<table width="70%" border="1" cellspacing="0" cellpadding="5" rules="all">
  <tr>
    <td width="15%" align="right" valign="top" class="heading">��������</td>
    <td width="85%">
<?=$myrow['images']?><br><br>
<b>������������ ��������: </b><?=$myrow['name_orig']?><br>
<b>���������� ��������: </b><?=$myrow['name_eng']?><br>
<b>������� ��������: </b><?=$myrow['name_rus']?><br><br>
<b>������: </b><?=$myrow['country']?><br>
<b>��� ������� / ������ ����������: </b><?=$myrow['year']?><br>
<b>����: </b><?=$myrow['genre']?><br>
<b>���������� �����������: </b><?=$myrow['age_limit']?><br><br>
<b>���������: </b><?=$myrow['category']?><br>
<b>���������� ��������: </b><?=$myrow['kol_ep']?><br>
<b>�����������������: </b><?=$myrow['time']?><br>
<b>������: </b><?=$myrow['studios']?><br><br>
<b>�������: </b><?=$myrow['rezhiser']?><br>
<b>��������: </b><?=$myrow['scenariy']?><br>
<b>����� ���������: </b><?=$myrow['avtor_orig']?><br>
<b>����������: </b><?=$myrow['kompozitor']?><br><br>
<b>��������: </b><br><?=$myrow['text']?><br><br>
<b>�������� ��������:</b><?=$myrow['name_ep']?><br><br><br>
<b>���������: </b><?=$myrow['file_type']?><br>
<b>�����: </b><?=$myrow['video']?>, <?=$myrow['video_codec']?><br>
<b>�����: </b><?=$myrow['audio']?><br>
<b>��������: </b><?=$myrow['sub']?><br>
<b>������: </b><?=$myrow['format']?><br>
<b>�������: </b><?=$myrow['translate']?><br>
<b>�����������: </b><?=$myrow['ozvuchivanie']?><br>
<b>�����������: </b><?=$myrow['komments']?><br>
    </td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">���</td>
    <td><?=$myrow['type']?></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">������</td>
    <td><?=$myrow['size']?> Mb (<?=number_format($myrow['size']*1024*1024, 0, ',', ',')?> bytes)</td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">��������</td>
    <td><?=$myrow['date']?></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="heading">����������</td>
    <td>&nbsp;</td>
  </tr>
</table>
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
<?php }?>
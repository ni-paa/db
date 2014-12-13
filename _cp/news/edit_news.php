<?php
include('inc/include.php');
?>
<html>
<head>
  <title>Администрирование сайта - Редактирование новости</title>
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
    <td width="130px" valign="top"><?php include('blocks/left_block.php'); ?></td>
    <td valign="top" style='border: solid #A2D7F1 1px;'>  
<?php
$result = mysql_query("SELECT id,title FROM news",$db);
while($myrow = mysql_fetch_array($result)){
?>
      
    </td>
  </tr>
</table>
<hr align="center" color="006DA3">
<table width="100%" border="0"><!--Подключаем нижний блок-->
  <tr>
    <td width="50%"><?php include('blocks/footer.php');?></td>
    <td width="50%"></td>
  </tr>
</table>
</body>
</html>
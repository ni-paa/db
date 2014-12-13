<?php
include('inc/include.php');
if (isset($_POST['title'])) {$title = $_POST['title']; if ($title == '') {unset($title);}}
if (isset($_POST['meta_d'])) {$meta_d = $_POST['meta_d']; if ($meta_d == '') {unset($meta_d);}}
if (isset($_POST['meta_k'])) {$meta_k = $_POST['meta_k']; if ($meta_k == '') {unset($meta_k);}}
if (isset($_POST['date'])) {$date = $_POST['date']; if ($date == '') {unset($date);}}
if (isset($_POST['description'])) {$description = $_POST['description']; if ($description == '') {unset($description);}}
if (isset($_POST['text'])) {$text = $_POST['text']; if ($text == '') {unset($text);}}
if (isset($_POST['author'])) {$author = $_POST['author']; if ($author == '') {unset($author);}}
?>
<html>
<head>
  <title>Администрирование сайта - Добавление новости</title>
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
if (isset($title) && isset($meta_d) && isset($meta_k) && isset($date) && isset($description) && isset($text) && isset($author))   
{
$result = mysql_query ("INSERT INTO news (title,meta_d,meta_k,date,description,text,author) VALUES ('$title', '$meta_d', '$meta_k', '$date', '$description', '$text', '$author')");
if ($result == 'true') {echo "<p>Новость успешно добавлена</p>";}
else {echo "<p>Новость недобавлена</p>";}

}
else

{
echo "<p>Заполнены не все поля</p>";
}      
   ?>
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
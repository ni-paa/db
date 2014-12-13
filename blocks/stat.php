<?php $s_time=microtime(); /*Начало времени*/ ?>
<?php/* //Логи по каждой посещенной странице
include('inc/include.php');
$date = date ("Y-m-d");
$time = date ("H:i:s");
$webpage = $_SERVER['PHP_SELF'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$result = mysql_query ("INSERT INTO log (date, time, webpage, browser, ip) VALUES ('$date', '$time', '$webpage', '$browser', '$ip')");*/
?>
<?php
$result = mysql_query("SELECT SUM(size) as 'all_size' FROM anime",$db);
while($myrow = mysql_fetch_array($result)){ ?>
<?php 
$query = " SELECT COUNT(*) FROM anime";
$sql = mysql_query($query);
$anime = mysql_result($sql, 0);
?>
Статистика базы:
  <table width="100%" style='border: solid #A2D7F1 1px;'>
    <td>Наименований: <b><a href="list.php"><? echo "$anime";?></a></b><br>Общий объем: <b><?=number_format($myrow['all_size']/1024/1024, 3, ',', '')?></b> Tb / <b><?=number_format($myrow['all_size']/1024, 3, ',', '')?></b> Gb<br>Полный список:<a href="anime.txt">read</a>На просмотр:<a href="wishlist.txt">read</a><br><a href="stat_bd.php">Полная статистика базы</a><br></span>
    </td>
  </table>
<?php }?>
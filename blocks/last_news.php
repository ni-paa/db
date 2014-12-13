<h3>Последние новости:</h3>
<?php
$result = mysql_query("SELECT id,title,description,date,author FROM news ORDER BY title DESC LIMIT 0, 5",$db);
while($myrow = mysql_fetch_array($result)){
?>
<a href='news_view.php?id=<?=$myrow['id']?>'><i><?=$myrow['date']?></i> - <b><?=$myrow['title']?></b><br><?=$myrow['description']?></a><br>
<?php }?>
  <table width="100%">
    <td align="center" valign="top" style="border-right:0px solid #006DA3">
<p align="center" class="title">.:Последнее:.</p>
<div id="colmenu">
<?php
$result = mysql_query("SELECT id,name,size,type FROM anime ORDER BY name DESC LIMIT 0, 5",$db);
while($myrow = mysql_fetch_array($result)){
?>
<a href='list_view.php?id=<?=$myrow['id']?>'><b><?=$myrow['name']?></b><br><?=$myrow['size']?> Mb :: <?=$myrow['type']?></a><br>
<?php }?>
</div>
    </td>
  </table>
<?php
$e_time=microtime(); /*Конец времени*/
?>

<table align="center" style='border: solid #A2D7F1 0px;'>
<tr>
<td align="center">Страница создана за <?=abs(round($e_time-$s_time, 3))?> сек.
Выполнено: 0<?=$db->query_count?> запросов.<br>

<script language="JavaScript" src="blocks/online.php"></script>
</td>
</tr>
</table>

<?php
//header("Content-type: text/html; charset=utf8");
$search = $_POST['search'];
$search = addslashes($search);
$search = htmlspecialchars($search);
$search = stripslashes($search);
   if($search == ''){
      exit("Начните вводить запрос");
   }
$db = mysql_connect("localhost","root", "vertriga");
mysql_select_db("db",$db);
mysql_query ("SET NAMES 'utf8'");             
$query = mysql_query("SELECT name FROM anime WHERE Name LIKE '%$search%'",$db);
if(mysql_num_rows($query) > 0){
   $sql = mysql_fetch_array($query);
   do{
     echo "<div>".$sql['name']."</div><br>";
   }while($sql = mysql_fetch_array($query));
}else
{
   echo "Нет результатов";
}
?>
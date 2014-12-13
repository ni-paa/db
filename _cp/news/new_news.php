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
    <td valign="top" style='border: solid #A2D7F1 1px;'><form name="form1" method="post" action="add_news.php">
      <p>
        <label>Заголовок новости<br>
          <input name="title" type="text" id="title">
          </label>
      </p>
      <p>
        <label>Краткое описание<br>
        <input type="text" name="meta_d" id="meta_d">
        </label>
      </p>
      <p>
        <label>Ключевые слова<br>
        <input type="text" name="meta_k" id="meta_k">
        </label>
      </p>
      <p>
        <label>Дата<br>
        <input type="text" name="date" id="date">
        </label>
      </p>
      <p>
        <label>Краткая новость<br>
        <textarea name="description" id="description" cols="60" rows="5"></textarea>
        </label>
      </p>
      <p>
        <label>Полная новость<br>
        <textarea name="text" id="text" cols="60" rows="10"></textarea>
        </label>
      </p>
      <p>
        <label>Автор<br>
        <input type="text" name="author" id="author">
        </label>
      </p>
      <p>
        <label>
        <input type="submit" name="submit" id="submit" value="Добавить новость">
        </label>
      </p>
    </form></td>
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
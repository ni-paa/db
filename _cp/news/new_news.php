<html>
<head>
  <title>����������������� ����� - ���������� �������</title>
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
    <td valign="top" style='border: solid #A2D7F1 1px;'><form name="form1" method="post" action="add_news.php">
      <p>
        <label>��������� �������<br>
          <input name="title" type="text" id="title">
          </label>
      </p>
      <p>
        <label>������� ��������<br>
        <input type="text" name="meta_d" id="meta_d">
        </label>
      </p>
      <p>
        <label>�������� �����<br>
        <input type="text" name="meta_k" id="meta_k">
        </label>
      </p>
      <p>
        <label>����<br>
        <input type="text" name="date" id="date">
        </label>
      </p>
      <p>
        <label>������� �������<br>
        <textarea name="description" id="description" cols="60" rows="5"></textarea>
        </label>
      </p>
      <p>
        <label>������ �������<br>
        <textarea name="text" id="text" cols="60" rows="10"></textarea>
        </label>
      </p>
      <p>
        <label>�����<br>
        <input type="text" name="author" id="author">
        </label>
      </p>
      <p>
        <label>
        <input type="submit" name="submit" id="submit" value="�������� �������">
        </label>
      </p>
    </form></td>
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
<form name="form1" method="post" action="add_news.php">
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
    </form>
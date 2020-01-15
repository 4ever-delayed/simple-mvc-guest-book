<form id='form' method="post">
    <h3>Оставить сообщение:</h3>
    <div class="form-group">
        <label for="inputName">Ваше имя:</label>
        <input value='<?php if (isset($data['post']['name'])) {
            echo htmlspecialchars($data['post']['name']);
        } ?>' type="text" class="form-control" name="post[name]" id="inputName" placeholder="Введите Ваше имя">
    </div>
    <div class="form-group">
        <label for="textarea">Сообщение:</label>
        <textarea name="post[body]" id="textarea" placeholder="Введите сообщение" class="form-control"><?php if (isset($data['post']['body'])) {
                echo htmlspecialchars($data['post']['body']);
            } ?></textarea>
    </div>


    <button type="submit" class="btn btn-default">Отправить</button>
</form>

<script>
    $(document).ready(function(){


        $("#form").submit(function(){

            var name = $("#inputName").val();
            var body  = $("#textarea").val();
            if (name =='')
            {
                alert ("Заполните имя пользователя!");
                return false;
            }
            if (body =='')
            {
                alert ("Заполните текст сообщения!");
                return false;
            }

            $.ajax({
                type: "POST",
                url: "guestbook/update",
                data: "post[name]="+name+"&post[body]="+body,
                success: function(html){
                    $('#messages').html(html);
                }
            });

            return false;
        });

    });
</script>
<h2>Гостевая книга</h2>

<?php if (!empty($data['error'])) { ?>
    <div class="row error">
        <ul>
            <?php foreach ($data['error'] as $item) { ?>
                <li><?php foreach ($item as $key => $value) {
                        echo $value;
                    } ?></li>
            <?php } ?>
        </ul>
    </div>
<?php } ?>

<?php if (isset($data['success'])) { ?>
    <div class="row success">
        <p>Сообщение успешно отправлено</p>
    </div>
<?php } ?>
<div id="form">
    <?php
    $this->renderPartial('_form_view.php',$data);
    ?>
</div>


<h3>Список сообщений:</h3>
<div id="messages">
    <?php
    $this->renderPartial('_messages_view.php',$data);
    ?>
</div>

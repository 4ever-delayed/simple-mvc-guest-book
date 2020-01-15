<table class="table table-striped" >
    <thead>
    <tr>
        <th>Дата добавления</th>
        <th>Имя</th>
        <th>Сообщение</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if (!empty($data['items'])) {
        foreach ($data['items'] as $item) { ?>
            <tr>
                <td><?php echo  htmlspecialchars($item['dtime']); ?></td>
                <td><?php echo htmlspecialchars($item['name']); ?></td>
                <td>
                        <div class="col-md-8">
                            <?php echo htmlspecialchars($item['body']); ?>
                        </div>
                </td>
            </tr>
        <?php }
    } else { ?>

        <tr>
            <td colspan="5">В гостевой книге пока еще нет сообщений.</td>
        </tr>

    <?php } ?>

    </tbody>
</table>

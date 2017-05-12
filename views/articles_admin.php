
<?php
    $pageTitle="Админ панель:Список";
    $pageRightLink="index.php?action=add";
    $pageLeftLink="../index.php";
    $pageRightLinkContent="Создать статью";
    include_once('header.php');
?>
            <!-- END Header (navbar) -->
            <table id="admin_table" class="table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($articles as $article): ?>
                    <tr>
                        <td><?=$article['date']?></td>
                        <td><?=articles_intro($article['title'], 80)?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$article['id']?>">Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$article['id']?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
<?php
    include_once('footer.php');
?>
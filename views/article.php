<?php
    $pageTitle="КОТИКИ";
    $pageRightLink="admin";
    $pageLeftLink="index.php";
    $pageRightLinkContent="Панель администратора";
    include_once('header.php');
?>
            <!-- Content -->
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <div class="thumbnail">
                  <img src="<?=$article['image']?>" alt="...">
                  <div class="caption">
                    <h3><?=$article['title']?></h3>
                    <em>Опубликованно: <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                    <p><a href="" class="btn btn-primary" role="button">Купить</a> <a href="#" class="btn btn-default" role="button" onclick="history.back(); return false;">Назад</a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- END Content -->
<?php
    include_once('footer.php');
?>
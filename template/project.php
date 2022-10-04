<html>  <head>    <meta charset="utf-8">    <title>Моя тестовая страница</title>    <link rel="stylesheet" href="css/project.css">    <link rel="stylesheet" href="css/feed.css">    <link rel="stylesheet" href="css/lessons.css">    <link rel="stylesheet" href="css/main.css">  </head>  <body>        <div class="Project">            <?php include 'default/sidebar.php'; ?>            <div class="feed">                <div class="feed-header">                    <h2>Доступные проекты</h2>                    <div class="buttonsFeed">                        <button class="ico_button"><img class="ico" src="img/Shield.svg"></button>                        <button class="ico_button"><img class="ico" src="img/Bell.svg"></button>                        <button id="apps" class="ico_button">Заявки</button>                    </div>                </div>                <div class="Lessons">                    <div class="media">					<?php					$k = 1;					foreach($content as $p){?>						<div class="media-cart">						<div class="media-cart-img">						<?						$i=1;						foreach((new User())::getContentProject($p['id'], (new Database())) as $v){                            echo $v;							if($i == 1){?>								<input checked="checked" type="radio" id="<?=$v['id']?>" name="<?=$p['id']?>_video"/>							<?}else{?>								<input type="radio" id="<?=$v['id']?>" name="<?=$p['id']?>_video"/>							<?}?>							<label for="<?=$v['id']?>" style="width: 95%;"></label>							<video class="project_video" preload="metadata" controls="controls" src="<?=$v['video']?>">							</video>						<?$i++;}?>						</div>							<p>Воронка №<?=$k?></p>                            <h3><?=$p['name']?></h3>                            <div style="display:flex;">								<input id="half_input" placeholder="https://translate.google.ru"/>								<button type="submit">Копировать</button>							</div>                            <div class="btn-delete-edit">                                <button type="submit" onclick="window.location.href = '?option=ProjectEdit&id=<?=$p['id']?>';"">Изменить</button>                                <button type="submit" onclick="window.location.href = '?option=ProjectController&method=delete&id=<?=$p['id']?>';"">Удалить</button>                            </div>                        </div>					<?$k++;}?>                        <div class="media-cart placeholder">                            <div class="btn-upload">                                <a  href="?option=ProjectController&method=createDir" class="create-new">									<img src="img/Create.svg" class="create-ico">									<p>Создать новый проект</p>								</a>                            </div>                        </div>                    </div>                </div>            </div>        </div>  </body></html>
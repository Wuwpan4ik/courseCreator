<html>
  <head>
    <meta charset="utf-8">
    <title>Моя тестовая страница</title>
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/feed.css">
    <link rel="stylesheet" href="css/lessons.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
        <div class="Project">
            <?php include 'sidebar.php';?>
            <div class="feed">
                <div class="feed-header">
				<div class="feed-menu">
					<a href="project.php"><button class="back_button"><img class="ico" src="img/StickLeft.svg"></button></a>
                    <form action="php/project_name.php" method="POST" id="insert">
						<?php
							$request = "SELECT * FROM course WHERE author_id = ".$_SESSION['user']['id']." ORDER BY `id` DESC LIMIT 1";
							$result = mysqli_query($db, $request);
							$res = mysqli_fetch_assoc($result);
						?>
						<h2 id="display_name"><?=$res['name']?></h2>
						<button class="none"><img id="name_change" src="img/Pen.svg" class="ico" onclick="changeName()"></button>
					</form>
					<script>
						function changeName(){
							document.getElementById("insert").innerHTML = '<input class="proj_name" name="title" placeholder="Введите новое название"><button type="submit" class="none"><img id="name_change" src="img/Pen.svg" class="ico"></button>';
							document.getElementById("name_change").style.background = "linear-gradient(180deg, #6989FE 0%, #3C64F4 100%)";
							document.getElementById("name_change").style.borderRadius = "8px";
						}
					</script>
				</div>
                    <div class="buttonsFeed">
                        <button class="ico_button"><img class="ico" src="img/Shield.svg"></button>
                        <button class="ico_button"><img class="ico" src="img/Bell.svg"></button>
                        <button id="apps" class="ico_button">Заявки</button>
                    </div>
                </div>
                <div class="Lessons">
                    <div class="media">
					<?php
						$videos = "SELECT * FROM course_content WHERE course_id = ".$res['id'];
						$vids = mysqli_query($db, $videos);
						$vid = mysqli_fetch_all($vids);
						foreach($vid as $v){?>
							<div class="media-cart">
								<video preload="metadata" controls="controls" class="media-cart-img" src="<?=$v[4]?>"></video>
								<form class="new_name">
									<input class="videoname" type="text" placeholder="<?=$v[2]?>">
									<input class="videoname" type="text" placeholder="<?=$v[3]?>">
									<button type="submit">Сохранить</button>
								</form>
							</div>
						<?}
					?>
                        <div class="media-cart placeholder">
                            <div class="btn-upload">
                                <form id="upload_form" action="./php/project_video.php" enctype="multipart/form-data" method="post">
									<a class="create-new">
										<input accept=".mp4" style="display:none;" id="video" name="video_uploader" type="file" onchange='document.getElementById("upload_form").submit()'/>
										<label for="video"><img src="img/Create.svg" class="create-ico"><span>Добавьте видео</span></label>
									</a>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
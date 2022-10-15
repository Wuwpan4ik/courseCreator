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

    <?php include 'default/sidebar.php';?>

    <div class="feed">

        <div class="feed-header">

            <div class="feed-menu">

                <a href="?option=Project"><button class="back_button"><img class="ico" src="img/StickLeft.svg"></button></a>

                <form action="?option=DirectoryController&method=setName&id=<?=$content[0][0]['id']?>" method="POST" id="insert">

                    <h2 id="display_name"><?=$content[0][0]['name']?></h2>

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
                foreach($content[1] as $v){?>

                    <div class="media-cart">

                        <video preload="metadata" controls="controls" class="media-cart-img" src="<?=$v['video']?>"></video>

                        <form method="POST" class="new_name" action="?option=FunnelController&method=renameVideo&id_item=<?=$v['id']?>&id=<?=$content[0][0]['id']?>">
                            <div>
                                <label for="name">Укажите заголовок:</label>
                                <input name="name" class="videoname" type="text" placeholder="<?=$v['name']?>" required>
                            </div>
                            <div>
                                <label for="description">Укажите описание:</label>
                                <textarea style="resize: none; height: 60px;" name="description" class="videoname" placeholder="<?=$v['description']?>" required></textarea>
                            </div>
                            <div>
                                <label for="button_text">Текст для кнопки:</label>
                                <input name="button_text" class="videoname" type="text" placeholder="<?=$v['button_text']?>" required>
                            </div>
                            <input type="hidden" value="<?=$v['id']?>">
                            <button type="button" class="button__edit" style="background: #757D8A;"><img style="width: 22px;" src="../img/printer.png">Действие для кнопки</button>
                            <button type="submit">Сохранить</button>

                        </form>

                    </div>

                <?}

                ?>

                <div class="media-cart placeholder">

                    <div class="btn-upload">

                        <form id="upload_form" action="?option=FunnelController&method=addVideo&id=<?=$content[0][0]['id']?>" enctype="multipart/form-data" method="post">

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

<?php include 'default/popupEditVideo.php';?>
<script src="../js/button__settings.js"></script>
</body>

</html>
<div class="media-cart">
    <div class="media-cart__controller">
        <div class="media-cart__controller-move reload_video" data-id="<?=$v['id']?>">
            <div class="media-cart__controller-move-right">
                <button><img src="/img/Arrow-left.svg" alt=""></button>
            </div>
            <div class="media-cart__controller-move-left">
                <button><img src="/img/Arrow-right.svg" alt=""></button>
            </div>
        </div>
        <div class="media-cart__controller-delete">
            <button onclick="deleteDirectory(this)"><img src="/img/Delete.svg" alt=""></button>
        </div>
    </div>
    <video id="123" class="media-cart-img" style="object-fit: cover;">
        <source class="video" src=".<?=$v['video']?>"/>
    </video>
    <img src="<?=$v['thubnails'] ?>" alt="">

    <form method="POST" class="new_name" enctype="multipart/form-data" action="/<?php if(strstr($_SERVER['REQUEST_URI'], 'Course')) {echo 'Course';} else {echo 'Funnel';} ?>/<?=$v['id']?>/rename">

        <?php if (strstr($_SERVER['REQUEST_URI'], 'Funnel' )) {?>
        <input type="hidden" value="<?=$v['id']?>">
        <div class="funnel-input input_focus">
            <label for="name" class="label_focus activeLabel">Укажите заголовок:</label>
            <input name="name" class="videoname" type="text" value="<?=$v['name']?>">
            <span class="clear_input_val">
        <img src="/img/clear_input.svg" alt="">
        </span>
        </div>
        <div class="funnel-input input_focus">
            <label for="description" class="label_focus ">Укажите описание:</label>
            <textarea name="description" class="videoname video-desc"><?=$v['description']?></textarea>
            <span class="clear_input_val">
            <img src="/img/clear_input.svg" alt="">
        </span>
        </div>

        <div class="button__do-block <?php if (!isset($v['button_text']) || is_null($v['button_text'])) { ?> display-none <?php } ?>" >
            <label>Текст для кнопки:</label>
            <input name="button_text" class="videoname video-desc" value="<?=$v['button_text']?>">
        </div>
         <button onclick="getCourseList()" type="button" class="button__edit button__do-block <?php if (!isset($v['button_text'])) { ?> display-none <?php } ?>" style="background: #757D8A;text-align: center"><img style="width: 25px; transform: translate(0, 0)" src="/img/actions.svg">Действия</button>
            <?php if (!isset($v['button_text'])) { ?>

                <button type="button" class="button-add button-add-button-edit"><img class="input__file-icon" src="/img/plus.svg" width="25">Добавить кнопку</button><?php } ?>
        <?php } else { ?>
            <div class="funnel-input input_focus">
                <label for="name" class="label_focus
">Укажите заголовок:</label>
                <input name="name" class="videoname" type="text" value="<?=$v['name']?>">
                <span class="clear_input_val">
            <img src="/img/clear_input.svg" alt="">
            </span>
            </div>
            <div class="funnel-input input_focus">
                <label for="description" class="label_focus activeLabel">Укажите описание:</label>
                <textarea name="description" class="videoname video-desc"><?=$v['description']?></textarea>
                <span class="clear_input_val">
                <img src="/img/clear_input.svg" alt="">
            </span>
            </div>
            <div class="funnel-input">
                <label for="description">Укажите стоимость урока:</label>
                <input name="price" class="videoname" type="number" value="<?=$v['price'] ?>">
            </div>
            <div class="file_input">
                <span>
                    Прикрепите файл к уроку:
                </span>
                <div class="avatar inCourse">
                    <div class="avatar-body">
                        <img src="../img/saveAvatar.svg" alt="">
                        <div class="avatar-body__info">
                            <span id="file-name" class="file-box">
                                <?php if (isset($v['file_url'])) {print_r(substr(basename($v['file_url']), 0, 10));} else {echo 'Название файла';}?>
                            </span>
                            <span id="file-size" class="file-box">
                                <?php if (isset($v['file_url'])) {print_r(round(filesize($v['file_url']) / 1024));} else {echo '0';} ?>кб из 5мб
                            </span>
                        </div>

                    </div>


                    <div class="input__wrapper">
                        <input name="file" type="file" id="input__file" class="input input__file" onchange="uploadFile(this)" multiple="">
                        <label for="input__file" class="input__file-button" style="">
                            <span class="input__file-icon-wrapper"><img class="input__file-icon" src="/img/plus.svg" width="25"></span>
                            <span class="input__file-button-text ">Добавить</span>
                        </label>
                    </div>

                </div>
            </div>
        <?php } ?>
        <button class="blue-button" type="submit">Сохранить</button>

    </form>
</div>
<html lang="ru">

<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Creator - Мои курсы</title>
    <link rel="stylesheet" href="/css/nullCss.css">
    <link rel="stylesheet" href="/css/lessons.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/tooltips.css">
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico">
</head>

<body>

<div class="Project app">

    <?php include 'default/sidebar.php'; ?>

    <div class="feed">

        <?php
        $title = "Мои курсы";
        $back = "Project";
        include ('default/header.php');
        ?>

        <div class="Lessons">

            <div class="media _container">

                <?php

                $k = 1;

                foreach($content['content'][0] as $p){?>

                    <div class="media-cart">

                        <div class="media-cart-img">
                            <div class="smallPlayer _conatiner">
                                <div class="smallPlayer__slick-slider">
                                    <div class="slider__pagination _conatiner-player">
                                        <div class="slick-dots"></div>
                                    </div>
                                    <div class="slider">
                                        <?

                                        $i=1;

                                        foreach($content['content'][1] as $v){
                                            if ($v['course_id'] == $p['id']) {?>

                                                <div class="slider__item ">
                                                    <div class="slider__video">
                                                        <video id="123" class="slider__video-item"
                                                        <source  class="video" src="<?=$v['video']?>" />
                                                        </video>
                                                    </div>
                                                    <div class="slider__darkness">

                                                    </div>
                                                    <div class="slider__header _conatiner-player ">
                                                        <div class="slider__header-logo">
                                                            <div class="slider__header-logo-img">
                                                                <img src="<? echo (isset($_SESSION['user']['avatar'])  ? $_SESSION['user']['avatar'] : "/uploads/ava/userAvatar.jpg") ?>" alt="">
                                                            </div>
                                                            <div class="slider__header-logo-text">
                                                                <?=$_SESSION['user']['first_name']?>
                                                            </div>
                                                        </div>
                                                        <div class="slider__header-views">
                                                            <div class="slider__header-views-img">
                                                                <img src="../img/smallPlayer/views.svg" alt="">
                                                            </div>
                                                            <div class="slider__header-views-count">
                                                                <?php if (!$p['views']) echo '0'?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?$i++;}}?>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <p style="margin: 20px 0px 10px;">Курс №<?=$k?></p>

                        <h3><?=$p['name']?></h3>

                        <div class="course-price"<?php if (is_null($_SESSION['user']['albato_key'])) { ?> data-tip="Добавьте url на Albato" <?php } ?>>
                            <form action="/Course/<?=$p['id']?>/setPrice" class="media__form" method="POST">
                                <div class="course__prices" style="position:relative;">
                                    <input type="number" name="course_price" min="100" placeholder="<? echo isset($p['price']) ? $p['price'] : "Укажите стоимость курса" ?>" <?php if (empty($_SESSION['user']['albato_key'])) echo 'disabled' ?>>
                                    <span class="course_currency">
                                        <?php echo isset($_SESSION["user"]['currency']) ? $_SESSION["user"]['currency'] : '₽'?>
                                    </span>
                                </div>
                                <button class="save_price" type="submit">
                                    Сохранить
                                </button>
                            </form>
                        </div>

                        <div class="btn-delete-edit">

                            <input type="hidden" value="<?=$p['id']?>" >

                            <button class="change_btn" type="submit" onclick="window.location.href = '/Course/<?=$p['id']?>';"">Изменить</button>

                            <button class="delete_btn" type="submit" onclick="deleteDirectory(this)" style="background: none;border: solid 1px #4E73F8;color: #4E73F8;">Удалить</button>

                        </div>

                    </div>

                    <?$k++;}?>

                <?php if ($k <= $content['limit_course']) {?>

                <div class="media-cart placeholder">

                    <div class="btn-upload" style="width: auto;">

                        <a  href="/Course/create" class="create-new">

                            <img src="/img/Create.svg" class="create-ico">

                            <p>Создать<br> новый курс</p>

                        </a>

                    </div>

                </div>
                <?php } ?>

            </div>

        </div>

    </div>

</div>
<div id="popup__background">
    <div id="popup">
        <div class="popup__container">
            <div class="popup-body">
                <div class="popup__title">Вы действительно хотите удалить проект?</div>
                <div class="popup__form">
                    <button class="popup__btn popup__delete popup__white">Удалить</button>
                    <button class="popup__btn popup__not-delete popup__blue">Не удалять</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
<script src="../js/script.js" ></script>
<script src="../js/slick.min.js"></script>
<script src="../js/sliders.js"></script>
<script>
    $("input[name='course_price']").attr('title', 'This is the hover-over text');
    let form__submit = $(function() {
        $('.media__form').each(function (){
            $(this).submit(function(e) {
                e.preventDefault();
                $.post(e.target.action, $(this).serialize());
                let input = $(this).find("input[name='course_price']")[0];
                input.placeholder = input.value;
                input.value = '';
                $(this).find('.save_price')[0].classList.remove("activeButton");
            });
        })
    });
</script>
<script src="/js/customInputs.js"></script>

<script>
    document.querySelectorAll('.slick-arrow').forEach(item => {
        item.remove();
    })
    let deleteButtons = document.querySelectorAll('.reboot');
    let notDelete = document.querySelector('.popup__not-delete');
    let deletes = document.querySelector('.popup__delete');
    let entryDisplay = document.querySelector('#popup__background');
    let body = document.querySelector('body');
    function toggleOverflow () {
        body.classList.toggle("overflow-hidden");
    }
    function deleteDirectory(elem) {
        entryDisplay.classList.add('display-block');
        toggleOverflow();
        deletes.addEventListener('click',function () {
            window.location.href = '/Course-delete/'+ elem.parentElement.children[0].value;
        });
    }
    notDelete.onclick = function (event) {
        if (event.target === notDelete) {
            entryDisplay.classList.remove('display-block');
            toggleOverflow();
        }
    }
    entryDisplay.onclick = function (event) {
        if (event.target === entryDisplay) {
            toggleOverflow();
            entryDisplay.classList.remove('display-block');
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.smallPlayer__slick-slider').forEach((elem) => {
            if (elem.querySelectorAll('.slider__item').length === 0) {
                elem.removeChild(elem.querySelector('.slider__pagination'));
                elem.parentElement.parentElement.style = "background: url(./img/CourseDefault.png);";
            }
        })
    });
</script>
<script src="/js/getNotifications.js"></script>

<script>
    let buttonSavePrice = document.querySelectorAll('.save_price');
    let priceForSave = document.querySelectorAll('input[name="price_save"]');
    let inputPrice = document.querySelectorAll("input[name='course_price']");
    for(let i = 0; i < inputPrice.length; i++){
        inputPrice[i].addEventListener('input', function(){
            if(inputPrice[i].value != ""){
                buttonSavePrice[i].classList.add('activeButton');
            }else{
                buttonSavePrice[i].classList.remove('activeButton');
            }
        });
    }

</script>
<script src="../js/sidebar.js"></script>
</body>

</html>
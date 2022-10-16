<html>

  <head>

    <meta charset="utf-8">

    <title>Моя тестовая страница</title>

    <link rel="stylesheet" href="css/tableusers.css">

    <link rel="stylesheet" href="css/general.css">

    <link rel="stylesheet" href="css/feed.css">

    <link rel="stylesheet" href="css/aboutuser.css">

    <link rel="stylesheet" href="css/profilesetting.css">

    <link rel="stylesheet" href="css/main.css">

  </head>

  <body>

        <div class="SettingAccount">

            <?php include 'default/sidebar.php';?>

            <div class="feed">

                <div class="feed-header">

                    <h2>Настройки аккаунта</h2>

                    <div class="buttonsFeed">

                        <button class="ico_button"><img class="ico" src="img/Shield.svg"></button>

                        <button class="ico_button"><img class="ico" src="img/Bell.svg"></button>

                        <button id="apps" class="ico_button">Заявки</button>

                    </div>

                </div>

                <div class="Components">

                    <div class="AboutUser">

                        <h2>Основная информация о вас</h2>

                        <p>Эта информация поможет вам востановить доступ к аккаунту в случае необходимости,

                            и позволит нам давать вам более персонализированный контент который вам поможет в запуске.</p>

                        <div class="mytabs">

                            <input type="radio" id="About" name="mytabs" checked="checked"/>

                            <label for="About" id="oplab"><p>О Вас</p></label>

                            <div class="tab">

                                <div class="about">

                                    <form method="POST" action="?option=AccountController&method=SaveSettings">

                                        <div class="field">

                                            <h2>Ваш Email</h2>

                                            <input name="email" class="full" type="email" placeholder="<? echo $_SESSION['user']['email'] ?>"/>
                                            <? echo $_SESSION['error']['email_message'] ?>
                                        </div>

                                        <h2>Кто вы?</h2>

                                        <div class="field">

                                            <input name="first_name" class="half" placeholder="<? echo $_SESSION['user']['first_name'] ?>"/>

                                            <input name="second_name" class="half" placeholder="<? echo $_SESSION['user']['second_name'] ?>"/>

                                            <? echo $_SESSION['error']['first_name_message'] ?>

                                            <? echo $_SESSION['error']['second_name_message'] ?>

                                        </div>

                                        <div class="field">

                                            <h2>Напишите имя вашего сайта</h2>

                                            <input id="check_url" name="site_url" class="full" placeholder="<? if (isset($_SESSION["user"]['site_url'])) {echo $_SESSION["user"]['site_url'];} else { echo "Ваш сайт";} ?>"/>

                                            <div id="message"><? echo $_SESSION['error']['url_message'] ?></div>
                                        </div>

                                        <div class="about-btn">

                                            <button id="check_button" type="button">Проверить домен</button>

                                        </div>
                                        <div class="about-btn">

                                            <button id="profile_send" type="submit">Сохранить</button>

                                        </div>
                                    </form>

                                </div>

                            </div>

                            <input type="radio" id="Integrations" name="mytabs"/>

                            <label for="Integrations"><p>Интеграции</p></label>

                            <div class="tab">

                                <div class="prodamus-input">

									<h2>Подключить продамус</h2>

									<div class="field">

										<input class="half type="api" placeholder="Вставьте секретный ключ"/>

										<input class="half type="FormPay" placeholder="Адрес платежной формы"/>

									</div>

                                    <div class="field">

										<h2>Подключить Send Plus</h2>

										<input class="full" type="api" placeholder="Вставьте секретный ключ"/>

									</div>

									<h2>Другие интеграции</h2>

                                    <div class="field">

										<input class="half" type="api" placeholder="Вставьте секретный ключ"/>

										<input class="half" type="id" placeholder="Ваш id"/>

									</div>

                                </div>

                            </div>

                            <input type="radio" id="Tarif" name="mytabs"/>

                            <label for="Tarif" id="cllab"><p>Тарифы</p></label>

                            <div class="tab">

                                <h2>Подключить Send Plus</h2>

                                <div class="image-carts">
                                  
                                  <?php foreach ($content[1] as $tariff) {?>

                                    <div class="cart">

                                        <div class="info-cart">

                                            <span><?=$tariff["price"]?>Р</span>

                                            <h3><?=$tariff["name"]?></h3>

                                            <p><?=$tariff["description"]?></p>

                                            <img src="<?=$tariff["image"]?>"/>

                                            <button>Перейти на этот тариф</button>

                                        </div>

                                    </div>
									
									                <?}?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="ProfileSetting">

                        <script>
                            function function_return() {
                                document.getElementById("hb").style["display"] = "block";
                            }
                        </script>

                        <form method="POST" enctype="multipart/form-data" action="?option=AccountController&method=saveAdditionalSettings">

						<h2>Ваше фото</h2>

                        <div class="input-upload">

							<img src="<?=$content[0]['avatar']?>" id="ava_preload">

                            <input id="ava" type="file" name="file_upload" accept=".jpg, .png, .jpeg" onchange="function_return()"/>

							<label class="ava_edit" for="ava"><img src="img/Pen.svg" class="ico"></label>

                        </div>

                        <div class="form-option">

                            <div class="OptionProf">

                                <h2>Выберите вашу нишу</h2>

                                <select class="selector" name="niche">

                                    <?
                                    $options = ["Изотерика", "Обучение", "Дизайн", "Политика", "Спорт", "Игры", "Животные"];
                                    for($i = 0; $i<7; $i++){
                                        if($options[$i] == $content[0]['niche']){?><option selected="selected"><?=$options[$i]?></option>
                                        <?}else{?><option><?=$options[$i]?></option><?}
                                    }
                                    ?>

                                </select>

                            </div>

                        </div>

                        <div class="form-option-gender">

                            <div class="OptionGender">

                                <h2>Ваш пол</h2>

                                <div class="choose">

                                    <input <?if($content[0]['gender'] == "M"){?> checked <?}?> style="display:none;" style="display:none;" value="M" id="M" name="gender" type="radio"/>

									<label for="M"><span class="dot"></span></label>Мужской

                                    <input <?if($content[0]['gender'] == "W"){?> checked <?}?> style="display:none;" value="W" id="W" name="gender" type="radio"/>

									<label for="W"><span class="dot"></span></label>Женский

                                </div>

                            </div>

                            <button class="ico_button" id="apps" type="submit">Сохранить</button>

                        </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>
  <? unset($_SESSION['error']) ?>

        <script>
            const button_submit = document.querySelector('#profile_send');
            const check_url = document.querySelector('#check_url');
            const check_button = document.querySelector('#check_button');
            const message = document.querySelector('#message');

            button_submit.addEventListener('click', function () {
               let second_button = document.querySelector('#apps');
               console.log(second_button);
               second_button.click();
            });
            check_button.addEventListener('click', function () {
                const request = new XMLHttpRequest();

                const url = "?option=UrlController&method=get_content&site_url=" + check_url.value;

                /* Здесь мы указываем параметры соединения с сервером, т.е. мы указываем метод соединения GET,
                а после запятой мы указываем путь к файлу на сервере который будет обрабатывать наш запрос. */
                request.open('GET', url);

                // Указываем заголовки для сервера, говорим что тип данных, - контент который мы хотим получить должен быть не закодирован.
                request.setRequestHeader('Content-Type', 'application/x-www-form-url');
                request.addEventListener("readystatechange", () => {
                    if (request.readyState === 4 && request.status === 200) {
                        message.innerHTML = request.responseText;
                    }
                });
                request.send();
            });
        </script>

  </body>

</html>

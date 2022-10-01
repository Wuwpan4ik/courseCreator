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
            <?php include 'sidebar.php';?>
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
                                    <div class="field">
										<h2>Ваш Email</h2>
										<input class="full" type="email" placeholder="Ваш Email"/>
									</div>
									<h2>Кто вы?</h2>
                                    <div class="field">
										<input class="half" type="first_name" placeholder="Ваше Имя"/>
										<input class="half" type="second_name" placeholder="Ваша Фамилия"/>
									</div>
                                    <div class="field">
										<h2>Напишите имя вашего сайта</h2>
										<input class="full" type="" placeholder="Ваш сайт"/>
									</div>
                                    <div class="about-btn">
                                        <button>Проверить домен</button>
                                    </div>
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
										<input class="half type="api" placeholder="Вставьте секретный ключ"/>
										<input class="half type="id" placeholder="Ваш id"/>
									</div>
                                </div>
                            </div>
                            <input type="radio" id="Tarif" name="mytabs"/>
                            <label for="Tarif" id="cllab"><p>Тарифы</p></label>
                            <div class="tab">
                                <h2>Подключить Send Plus</h2>
                                <div class="image-carts">
                                    <div class="cart">
                                        <div class="info-cart">
                                            <span>2800Р</span>
                                            <h3>Для новичков</h3>
                                            <p>Описание тарифа</p>
                                            <img src="img/Girl.jpg"/>
                                            <button>Перейти на этот тариф</button>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <div class="info-cart">
                                            <span>2800Р</span>
                                            <h3>Для новичков</h3>
                                            <p>Описание тарифа</p>
                                            <img src="img/Girl.jpg"/>
                                            <button>Перейти на этот тариф</button>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <div class="info-cart">
                                            <span>2800Р</span>
                                            <h3>Для новичков</h3>
                                            <p>Описание тарифа</p>
                                            <img src="img/Girl.jpg"/>
                                            <button>Перейти на этот тариф</button>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <div class="info-cart">
                                            <span>2800Р</span>
                                            <h3>Для новичков</h3>
                                            <p>Описание тарифа</p>
                                            <img src="img/Girl.jpg"/>
                                            <button>Перейти на этот тариф</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ProfileSetting">
						<h2>Ваше фото</h2>
                        <div class="input-upload">
							<img src="<?=$_SESSION['user']['avatar']?>" id="ava_preload">
                            <input id="ava" type="file" name="file_upload"/>
							<label class="ava_edit" for="ava"><img src="img/Pen.svg" class="ico"></label>
                        </div>
                        <div class="form-option">
                            <form action="" class="OptionProf">
                                <h2>Выберите вашу нишу</h2>
                                <select>
                                    <option value="1" selected><p>Изотерика</p></option>
                                    <option value="2">Обучение</option>
                                    <option value="3">Дизайн</option>
                                    <option value="4">Политика</option>
                                    <option value="5">Спорт</option>
                                    <option value="6">Игры</option>
                                    <option value="7">Животные</option>
                                </select>
                            </form>
                        </div>
                        <div class="form-option-gender">
                            <form action="" class="OptionGender">
                                <h2>Ваш пол</h2>
                                <div class="choose">
                                    <input style="display:none;" value="Мужчина" id="M" name="gender" type="radio"/>
									<label for="M"><span class="dot"></span></label>Мужской
                                    <input style="display:none;" value="Женщина" id="W" name="gender" type="radio"/>
									<label for="W"><span class="dot"></span></label>Женский
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
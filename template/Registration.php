<!DOCTYPE html><html lang="en"><head>    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="/css/nullCss.css">    <link rel="stylesheet" href="/css/auth.css">    <title>Document</title></head><body><div class="create-account container-reg">    <form method="POST" action="/LoginController/reg" enctype="multipart/form-data">        <div class="reg-logo">            <img src="../img/regLogo.jpg" alt="">        </div>        <h3>Создайте ваш аккаунт прямо сейчас</h3>        <?php if(isset($_SESSION['error']['registration_message'])) echo $_SESSION['error']['registration_message']?>            <div class="reg-name">                <input required placeholder="Имя" type="text" name="first_name">                <input required placeholder="Фамилия" type="text" name="second_name">            </div>        <div class="reg-info">            <input required placeholder="Ваш Email" type="email" name="email">            <input required placeholder="Ваш пароль" type="password" name="pass">        </div>        <div>            <p>Выберите нишу</p>            <select class="choose-niche" required name="niche">                <option>Эзотерика</option>                <option>Обучение</option>                <option>Дизайн</option>                <option>Политика</option>                <option>Спорт</option>                <option>Игры</option>                <option>Животные</option>            </select>        </div>        <div>            <p>Добавьте аватар</p>            <div class="avatar">                <div class="avatar-body">                    <img src="../img/saveAvatar.svg" alt="">                    <div class="avatar-body__info">                        <span id="file-name" class="file-box">Название файла</span>                        <span id="file-size" class="file-box">0 кб из доступных 5 мб</span>                    </div>                </div>                <div class="input__wrapper">                    <input accept="image/img, image/jpeg, image/png" name="avatar" type="file" id="input__file" class="input input__file" onchange='uploadFile(this)' multiple>                    <label for="input__file" class="input__file-button">                        <span class="input__file-icon-wrapper"><img class="input__file-icon" src="./img/plus.svg"  width="25"></span>                        <span class="input__file-button-text">Добавить</span>                    </label>                </div>            </div>        </div>        <button class="reg__button" type="submit" id="submit">Регистрация</button>        <div class="entrance">            <a href="/login">Есть аккаунт?</a>        </div>    </form>    <? unset($_SESSION['error']) ?></div><script src="/js/printFailName.js"></script></body></html>
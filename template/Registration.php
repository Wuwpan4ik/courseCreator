<!DOCTYPE html><html lang="en"><head>    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">    <link rel="stylesheet" href="/css/nullCss.css">    <link rel="stylesheet" href="/css/auth.css">    <title>Course Creator - Регистрация</title>    <!--Favicon-->    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico"></head><body><div class="create-account container-reg">    <form class="reg__form" method="POST" action="/LoginController/reg" enctype="multipart/form-data">        <div class="reg-logo">            <img src="../img/regLogo.jpg" alt="">        </div>        <h3>Создайте ваш первый курс прямо сейчас</h3>        <?php if(isset($_SESSION['error']['registration_message'])) echo $_SESSION['error']['registration_message']?>            <div class="reg-name">                <div class="input_focus">                    <label for="first_name" class="label_focus">Имя</label>                    <input required type="text" name="first_name">                    <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>                </div>                <div class="input_focus">                    <label for="second_name" class="label_focus">Фамилия</label>                    <input required type="text" name="second_name">                    <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>                </div>            </div>        <div class="reg-info">            <div class="input_focus">                <label for="username" class="label_focus">Логин</label>                <input id="username" type="text" name="username">                <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>            </div>            <div class="input_focus">                <label for="email" class="label_focus">Ваша почта</label>                <input required type="email" name="email">                <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>            </div>            <div class="input_focus">                <label for="pass" class="label_focus">Ваш пароль</label>                <input required type="password" name="pass">                <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>            </div>        </div>        <div style="margin-bottom: 20px;">            <p>Выберите нишу</p>            <select class="choose-niche" required name="niche">                <option>Эзотерика</option>                <option>Обучение</option>                <option>Дизайн</option>                <option>Политика</option>                <option>Спорт</option>                <option>Игры</option>                <option>Животные</option>            </select>        </div>        <div style="border-top:1px solid #E1E3E6">            <p>Добавьте аватар</p>            <div class="avatar">                <div class="avatar-body">                    <img src="../img/saveAvatar.svg" alt="">                    <div class="avatar-body__info">                        <span id="file-name" class="file-box">Название файла</span>                        <span id="file-size" class="file-box">0 кб</span>                    </div>                </div>                <div class="input__wrapper">                    <input  accept="image/img, image/jpeg, image/png" name="avatar" type="file" id="input__file" class="input input__file" onchange='uploadFile(this)' multiple>                    <label for="input__file" class="input__file-button">                        <span class="input__file-icon-wrapper"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 9H11V7C11 6.45 10.55 6 10 6C9.45 6 9 6.45 9 7V9H7C6.45 9 6 9.45 6 10C6 10.55 6.45 11 7 11H9V13C9 13.55 9.45 14 10 14C10.55 14 11 13.55 11 13V11H13C13.55 11 14 10.55 14 10C14 9.45 13.55 9 13 9ZM10 18C5.589 18 2 14.411 2 10C2 5.589 5.589 2 10 2C14.411 2 18 5.589 18 10C18 14.411 14.411 18 10 18ZM10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0Z" fill="#757D8A"/></svg></span>                        <span class="input__file-button-text">Добавить</span>                    </label>                </div>            </div>        </div>        <div class="error">        </div>        <button class="reg__button" type="submit" id="submit">Регистрация</button>        <div class="entrance">            <a href="/login">Есть аккаунт?</a>        </div>    </form>    <? unset($_SESSION['error']) ?></div><script src="/js/printFailName.js"></script><!--For Input Holders--><script src="/js/jquery-3.6.1.min.js"></script><script>    let form__submit = $(function() {        $('.reg__form').each(function () {            $(this).submit(function (e) {                e.preventDefault();                $.ajax({                    url: $(this).attr("action"),                    type: $(this).attr("method"),                    dataType: "JSON",                    data: new FormData(this),                    processData: false,                    contentType: false,                    error: function (data) {                        if ("success" === data.responseText) {                            window.location.replace('/')                        } else {                            document.querySelector('.error').innerHTML = data.responseText;                        }                    }                });            })        });    });</script><script>    window.onload = () =>{        let inputs = document.querySelectorAll('.input_focus input');        let inputsLabel = document.querySelectorAll('.input_focus label');        let inputClear = document.querySelectorAll('.input_focus span');        for(let i =0; i < inputs.length; i++){            inputs[i].addEventListener('input', function(){                if(inputs[i].value != ""){                    inputsLabel[i].classList.add('activeLabel');                    inputClear[i].classList.add('has_content');                }                else {                    inputsLabel[i].classList.remove('activeLabel');                    inputClear[i].classList.remove('has_content');                }            });            inputClear[i].onclick = () =>{                inputsLabel[i].classList.remove('activeLabel')                inputs[i].value = "";                inputClear[i].classList.remove('has_content')            }        }    }</script></body></html>
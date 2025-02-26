<!DOCTYPE html>

<html lang="ru">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/nullCss.css">
    <link rel="stylesheet" href="/css/auth.css">

    <title>Course Creator - Восстановление пароля</title>
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico">
</head>

<body>
<div class="login-account container-reg">

    <form method="POST" action="/LoginController/recovery">
        <div class="reg-logo">
            <img src="../img/regLogo.jpg" alt="">
        </div>
        <h3>Восстановление пароля</h3>
        <div class="input_focus">
            <label for="username" class="label_focus">Логин</label>
            <input type="text" name="username">
            <span class="clear_input_val">
                <img src="/img/clear_input.svg" alt="">
            </span>
        </div>
        <button class="reg__button" type="submit" id="submit">Выслать пароль</button>
        <div class="entrance login-footer">
            <a href="/reg">Зарегистрироваться</a>
            <a href="/login">Авторизация</a>
        </div>
    </form>
</div>
<!--For Input Holders-->
<script src="/js/jquery-3.6.1.min.js"></script>
<script>
    window.onload = () =>{
        let inputs = document.querySelectorAll('.input_focus input');
        let inputsLabel = document.querySelectorAll('.input_focus label');
        let inputClear = document.querySelectorAll('.input_focus span');


        for(let i =0; i < inputs.length; i++){
            inputs[i].addEventListener('input', function(){
                if(inputs[i].value != ""){
                    inputsLabel[i].classList.add('activeLabel');
                    inputClear[i].classList.add('has_content');
                }
                else {
                    inputsLabel[i].classList.remove('activeLabel');
                    inputClear[i].classList.remove('has_content');
                }
            });

            inputClear[i].onclick = () =>{
                inputsLabel[i].classList.remove('activeLabel')
                inputs[i].value = "";
                inputClear[i].classList.remove('has_content')
            }
        }
    }
</script>
</body>

</html>

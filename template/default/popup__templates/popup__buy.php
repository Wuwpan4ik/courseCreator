<div class="popup__buy popup" style="color: black;">
    <div class="popup__buy-body">
<!--        <div class="popup__buy-title popup-title">Вы выбрали:</div>-->
<!--        <div class="popup__buy-body">-->
<!--            <div class="popup__buy-item popup-item">-->
<!--                <div class="popup__allLessons-item-video">-->
<!--                    <div class="popup__allLessons-item-video-play">-->
<!--                        <img src="../img/smallPlayer/play.png" alt="">-->
<!--                    </div>-->
<!--                    <img src="../img/smallPlayer/Group1426.png" alt="">-->
<!--                </div>-->
<!--                <div class="popup__allLessons-item-info">-->
<!--                    <div class="popup__allLessons-item-info-header">-->
<!--                        <div class="popup__allLessons-item-info-header-number">-->
<!--                            01-->
<!--                        </div>-->
<!--                        <div class="popup__allLessons-item-info-header-time">-->
<!--                            22 минуты-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="popup__allLessons-item-info-title">-->
<!--                        Управление гневом внутри себя-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="popup__buy-footer">
            <form class="popup__form" id="BuyPopup" method="POST" action="/ClientsController/CourseVideo">
                <input id="creator_id" value="" name="creator_id" type="hidden">
                <input id="course_id" value="" name="course_id" type="hidden">
                <div class="popup__buy-price">
                    <div class="popup__buy-price-title">
                        Стоимость курса:
                    </div><div class="popup__buy-price-cost">
                        <span id="price">1000</span> <?=isset($content['funnel_content'][0]['currency']) ? $content['funnel_content'][0]['currency'] : '₽'?>
                    </div>
                </div>
                <div class="popup__buy-register">
                    <div class="popup__buy-body-form input">
                        <div class="popup__bonus-form-input-account input-img">
                            <img src="/img/smallPlayer/account.svg" alt="">
                        </div>
                        <input name="first_name" type="text" placeholder="Ваше имя" required>
                    </div>
                    <div class="popup__buy-body-form  input">
                        <div class="popup__bonus-form-input-email input-img">
                            <img src="/img/smallPlayer/email.svg" alt="">
                        </div>
                        <input name="email" type="email" placeholder="Ваша почта" required>
                    </div>
                    <div class="popup__buy-body-form  input">
                        <div class="popup__bonus-form-input-phone input-img">
                            <img src="/img/smallPlayer/phone.svg" alt="">
                        </div>
                        <input name="phone" type="tel" placeholder="Ваш телефон">
                    </div>
                </div>

                <div class="popup__buy-form-buy-button">
                    <div class="popup__buy-form-buy button-form">
                        <button type="button" class="button button-back">Назад</button>
                    </div>
                    <div class="popup__buy-form-back button-form">
                        <button type="submit" class="button" style="<? echo (json_decode($content['main__settings'], true)['button__style-color'])?>; <? echo (json_decode($content['main__settings'], true)['button__style-style'])?>">Перейти к оплате</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="overlay-allLessons overlay overlay-<?=$name?> <?php if($item['dis_trans'] == 1) echo 'disable-skip' ?>">
    <div class="whiteSpace" style="position: absolute;top: 0;width: 100%;">

    </div>
    <div class="popup__allLessons popup popup-<?=$name?>">
        <div class="popup__allLessons-body">
            <div class="popup__allLessons-title popup-title">Все уроки курса:</div>
            <div class="popup__allLessons-text popup-text">Курс состоит из <?=count($content['course_content']); ?> уроков</div>
            <div class="popup__allLessons-body__items">
                <?php $count = 1; foreach ($content['course_content'] as $item) { ?>

                        <div class="popup__allLessons-item__header">
                            <div class="Course-item popup-item ">
                                <div class="popup__allLessons-item-video__img " style="width: 76px; height: 100px;">
                                    <div data-id="133" class="popup__allLessons-item item__list-id"></div>
                                    <img style="width: 100%; height: 100%;" src="/<?=$item['thubnails']?>"" alt="">
                                </div>
                                <div class="popup__allLessons-item-info">
                                    <div class="popup__allLessons-item-info-header">
                                        <div class="first_row_video" style="display:flex;align-items: center;width:100%;">
                                            <div class=" aboutTheAuthor notAvailable-number">
                                                Урок <?=$count?>
                                            </div>
                                            <div class="duration_time">
                                                <?=$item['duration']?>
                                            </div>
                                        </div>
                                        <div class="second_row_video" style="width:100%;">
                                            <div class="popup__allLessons-item-info-title">
                                                <?=$item['name']?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($item['description'])) { ?>
                                    <button class="accordion-button" id="accordion-button-1" aria-expanded="false">
                                        <span class="icon" aria-hidden="true" style="cursor: pointer;"></span>
                                    </button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-item">
                                    <div class="accordion-content" style="text-align: left">
                                        <?=$item['description']?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php $count += 1;
                } ?>
            </div>
        </div>
        <div class="popup__allLessons-form">
            <div class="popup__allLessons-form-buy button-open" >
                <button style="<? echo (json_decode($content['main__settings'], true)['button__style-color'])?>; <? echo (json_decode($content['main__settings'], true)['button__style-style'])?>" data-price="<?=$content['course_id'][0]['price']?>" data-course="<?=$content['course_id'][0]['id']?>" data-author="<?=$content['course_id'][0]['author_id']?>" type="button" class="button button-buy">Купить весь курс за <?php print_r($content['course_id'][0]['price']) ?> <?=(isset($content['funnel_content'][0]['currency']) && !empty($content['funnel_content'][0]['currency'])) ? $content['funnel_content'][0]['currency'] : '₽'?></button>
            </div>
            <div class="popup__allLessons-form-notBuy">
                <button type="button" class="button button-notBuy" onclick="notBuy()">Пока не хочу покупать</button>
            </div>
        </div>
    </div>
</div>
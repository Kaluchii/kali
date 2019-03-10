<div class="white-popup mfp-with-anim mfp-hide js_form_id" id="call_back_form">
    <h4 class="white-popup__title">Оставьте телефон <br> и мы вам перезвоним</h4>
    <div class="white-popup__form feedback-form">
        {{--Передача Названия формы--}}
        <input type="hidden" name="form" class="js_form_input" value="call_back_form">

        <div class="feedback-form__input-wrap">
            <div class="feedback-form__validation-wrap feedback-input">
                <input type="text" placeholder="Ваше имя" name="client_name" required class="feedback-input__field js_form_input">
                <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Как к вам обращаться</p></div>
            </div>
        </div>

        <div class="feedback-form__input-wrap">
            <div class="feedback-form__validation-wrap feedback-input">
                <input type="tel" data-require="true" placeholder="+7 (...) ... .. .." class="feedback-input__field js_form_input" maxlength="25" data-mask="+7 (000) 000-00-00" name="phone">
                <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Телефонный номер для связи</p></div>
            </div>
        </div>

        <div class="feedback-form__input-wrap feedback-form__input-wrap--btn">
            <input type="submit" value="Заказать звонок" class="feedback-form__btn button button--orange js_send_form">
        </div>
    </div>
</div>
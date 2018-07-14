@section('application')
    <div class="application">
        <div class="application__container">
            <div class="application__title">Оставьте заявку на бесплатный замер ваших окон</div>

            <div class="application__form js_form_id" id="measurement">
                <input type="hidden" name="form" class="js_form_input" value="call">
                <div class="application__input-wrap">
                    <div class="application__validation-wrap feedback-input">
                        <input type="text" placeholder="Имя" name="client_name" required class="feedback-input__field js_form_input">
                        <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Как к вам обращаться</p></div>
                    </div>
                </div>

                <div class="application__input-wrap">
                    <div class="application__validation-wrap feedback-input">
                        <input type="tel" placeholder="+7 (...) ... .. .." data-require="true" class="feedback-input__field js_form_input" maxlength="25" data-mask="+7 (000) 000-00-00" name="phone">
                        <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Телефонный номер для связи</p></div>
                    </div>
                </div>

                <div class="application__input-wrap">
                    <div class="application__validation-wrap">
                        <div class="custom-select">
                            <select class="js_form_input" name="time">
                                <option value="Время">Время</option>
                                <option value="С 9 до 13">С 9 до 13</option>
                                <option value="С 13 до 19">С 13 до 19</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="application__input-wrap application__input-wrap--btn">
                    <input type="submit" value="Оставить заявку" class="application__btn button button--orange js_send_form">
                </div>
            </div>

        </div>
    </div>
@endsection
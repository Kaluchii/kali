@section('application')
    <div class="application">
        <div class="application__container">
            <div class="application__title">Оставьте заявку на бесплатный замер ваших окон</div>

            <div class="application__form form-id" id="measurement">
                <input type="hidden" name="form" class="js_form_input" value="call">
                <div class="application__input-wrap">
                    <div class="form-row__validation-wrap feedback-input">
                        <input type="text" name="client_name" required class="feedback-input__field js_form_input">
                        <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Как к вам обращаться</p></div>
                    </div>
                </div>

                <div class="application__input-wrap">
                    <div class="form-row__validation-wrap feedback-input">
                        <input type="tel" class="feedback-input__field js_form_input" maxlength="25" data-mask="(000) 000-00-00" name="phone">
                        <div class="feedback-input__tooltip-wrap"><p class="feedback-input__tooltip">Телефонный номер для связи</p></div>
                    </div>
                </div>

                <div class="application__input-wrap application__input-wrap--btn">
                    <input type="submit" value="Оставить заявку" class="application__btn button button--orange js_send_form">
                </div>
            </div>

        </div>
    </div>
@endsection
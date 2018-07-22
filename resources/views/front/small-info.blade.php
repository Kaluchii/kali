@section('small-info')
    <div class="small-info">
        <div class="small-info__container">
            <div class="small-info__phone">{{$all_site->contact_us_phone}}</div>
            <div class="small-info__btn-wrap">
                <button href="#call_back_form" class="small-info__btn button button--white-border js_call_back">Связаться с нами</button>
            </div>
            <div class="small-info__link-wrap small-info__link-wrap--about">
                <a href="#" class="small-info__link link-white">О компании</a>
            </div>
            <div class="small-info__link-wrap small-info__link-wrap--pay">
                <a href="#" class="small-info__link link-white">Оплата</a>
            </div>
        </div>
    </div>
@endsection
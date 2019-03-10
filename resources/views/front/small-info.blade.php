@section('small-info')
    <div class="small-info">
        <div class="small-info__container">
            <div class="small-info__phone">{{$all_site->contact_us_phone}}</div>
            <div class="small-info__btn-wrap">
                <button href="#call_back_form" class="small-info__btn button button--white-border js_call_back">Связаться с нами</button>
            </div>
            <div class="small-info__link-wrap small-info__link-wrap--about">
                @if(Request::is('about'))
                    <span class="small-info__link link-white is-active">О компании</span>
                @else
                    <a href="/about" class="small-info__link link-white">О компании</a>
                @endif
            </div>
            <div class="small-info__link-wrap small-info__link-wrap--pay">
                @if(Request::is('pay'))
                    <span class="small-info__link link-white is-active">Оплата</span>
                @else
                    <a href="/pay" class="small-info__link link-white">Оплата</a>
                @endif
            </div>
        </div>
    </div>
@endsection
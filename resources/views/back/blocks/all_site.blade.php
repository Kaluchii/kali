@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Для всего сайта'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Ссылка на Instagram</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->inst_field}}"
                       data-name="inst"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на ВКонтакте</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->vk_field}}"
                       data-name="vk"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Номер телефона в кнопке в мобильной версии</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->mob_phones_field}}"
                       data-name="mob_phones"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Номер телефона в блоке "Связаться с нами"</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->contact_us_phone_field}}"
                       data-name="contact_us_phone"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>График работы (подвал)</label>
                <textarea class="form-control text textarea--small" data-reg="true"
                          data-name="bottom_work_time"
                          data-type="string"
                          data-block="all_site"
                          data-id="0">{{$block->bottom_work_time_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Телефоны (подвал)</label>
                <textarea class="form-control text textarea--small" data-reg="true"
                          data-name="bottom_phones"
                          data-type="string"
                          data-block="all_site"
                          data-id="0">{{$block->bottom_phones_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Факс (подвал)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->bottom_fax_field}}"
                       data-name="bottom_fax"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Email (подвал)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->bottom_email_field}}"
                       data-name="bottom_email"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Мобильные телефоны (подвал)</label>
                <textarea class="form-control text textarea--small" data-reg="true"
                          data-name="bottom_mob_phones"
                          data-type="string"
                          data-block="all_site"
                          data-id="0">{{$block->bottom_mob_phones_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Адрес</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->address_field}}"
                       data-name="address"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Широта расположения метки на карте (подвал)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->latitude_field}}"
                       data-name="latitude"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Долгота расположения метки на карте (подвал)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->longitude_field}}"
                       data-name="longitude"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="top_phones">
        <div class="box-header with-border">
            <h3 class="box-title"> Номера телефонов в шапке </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->top_phones_group as $item)
                    @include('back.groups.top_phones.top_phones_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="times_for_call">
        <div class="box-header with-border">
            <h3 class="box-title"> Диапазоны времени в выпадающем списке для звонка </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->times_for_call_group as $item)
                    @include('back.groups.times_for_call.times_for_call_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="partners">
        <div class="box-header with-border">
            <h3 class="box-title"> Логотипы партнеров (подвал) </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->partners_group as $item)
                    @include('back.groups.partners.partners_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
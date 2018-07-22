<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Локация {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="contacts_list">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Адрес</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->address_field}}"
                   data-name="address"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Телефоны</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->phones_field}}"
                   data-name="phones"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Факс</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->fax_field}}"
                   data-name="fax"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Мобильный</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->mob_field}}"
                   data-name="mob"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->email_field}}"
                   data-name="email"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>График работы</label>
            <textarea class="form-control text textarea--small" data-reg="true"
                      data-name="work_time"
                      data-type="string"
                      data-block="contacts_list"
                      data-id="{{$item->id_field}}">{{$item->work_time_field}}</textarea>
        </div>
        <div class="form-group">
            <label>Широта расположения метки на карте</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->latitude_field}}"
                   data-name="latitude"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Долгота расположения метки на карте</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->longitude_field}}"
                   data-name="longitude"
                   data-type="string"
                   data-block="contacts_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="contacts_list"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Профиль {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="profiles">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Название</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->component_name_field}}"
                   data-name="component_name"
                   data-type="string"
                   data-block="profiles"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Стоимость белого профиля</label>
            <input class="form-control float"
                   type="number" placeholder=""
                   value="{{$item->price_field}}"
                   data-name="price"
                   data-type="float"
                   data-block="profiles"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Стоимость цветного профиля</label>
            <input class="form-control float"
                   type="number" placeholder=""
                   value="{{$item->price_color_field}}"
                   data-name="price_color"
                   data-type="float"
                   data-block="profiles"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="profiles"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
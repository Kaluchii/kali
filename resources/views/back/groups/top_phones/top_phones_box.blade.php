<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Номер телефона {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="top_phones">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Номер телефона</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->number_field}}"
                   data-name="number"
                   data-type="string"
                   data-block="top_phones"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="top_phones"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
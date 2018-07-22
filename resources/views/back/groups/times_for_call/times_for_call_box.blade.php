<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Диапазон {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="times_for_call">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Диапазон</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->text_field}}"
                   data-name="text"
                   data-type="string"
                   data-block="times_for_call"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="times_for_call"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
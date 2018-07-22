<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Факт {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="slider_facts">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Текст</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->text_field}}"
                   data-name="text"
                   data-type="string"
                   data-block="slider_facts"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="slider_facts"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
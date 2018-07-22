<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Отзыв {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="reviews_list">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Имя</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->reviewer_name_field}}"
                   data-name="reviewer_name"
                   data-type="string"
                   data-block="reviews_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Город</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->city_field}}"
                   data-name="city"
                   data-type="string"
                   data-block="reviews_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Текст</label>
            <textarea class="form-control text" data-reg="true"
                      data-name="text"
                      data-type="text"
                      data-block="reviews_list"
                      data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
        </div>
        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="reviews_list"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
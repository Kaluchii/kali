<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Пример {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="examples_list">Удалить</button>
    </div>

    <div class="box-body">
        <div class="form-group">
            <label>Название</label>
            <textarea class="form-control text textarea--small" data-reg="true"
                      data-name="text"
                      data-type="string"
                      data-block="contacts_list"
                      data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
        </div>
        <div class="form-group">
            <label>Цена от</label>
            <input class="form-control float"
                   type="number" placeholder=""
                   value="{{$item->price_field}}"
                   data-name="price"
                   data-type="float"
                   data-block="examples_list"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Изображение (~150x200 пикселей)</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">
                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->img_field->link}}?{{$item->img_field->cache_index}}" class="kv-preview-data file-preview-image"
                                         title="{{$item->img_field->alt}}" alt="{{$item->img_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-actions">
                                        <input type="text" class="form-control alt-text" data-block="examples_list"
                                               data-type="images" data-id="{{$item->id_field}}" data-name="alt"
                                               value="{{$item->img_field->alt}}">
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files"
                                    class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                        class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload"
                                    class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                        class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать изображение …</span>
                                <input type="file" class="form-control file"
                                       data-block="examples_list"
                                       data-name="img"
                                       data-type="image"
                                       data-id="{{$item->id_field}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1 no-padding">
            <div class="form-group">
                <label>Позиция</label>
                <input type="number" class="form-control string"
                       data-id="{{$item->id_field}}"
                       data-block="examples_list"
                       data-name="sorter"
                       value="{{$item->sorter_field}}">
            </div>
        </div>
    </div>
</div>
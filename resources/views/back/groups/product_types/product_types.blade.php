@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Изделие'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название изделия</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->type_name_field}}"
                       data-name="type_name"
                       data-type="string"
                       data-block="product_types"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Количество импостов в даном изделии</label>
                <input class="form-control int"
                       type="number" placeholder=""
                       value="{{$item->imposts_count_field}}"
                       data-name="imposts_count"
                       data-type="int"
                       data-block="product_types"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Стоимость белой фурнитуры для данного изделия</label>
                <input class="form-control float"
                       type="number" placeholder=""
                       value="{{$item->furniture_price_field}}"
                       data-name="furniture_price"
                       data-type="float"
                       data-block="product_types"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Стоимость цветной фурнитуры для данного изделия</label>
                <input class="form-control float"
                       type="number" placeholder=""
                       value="{{$item->furniture_price_color_field}}"
                       data-name="furniture_price_color"
                       data-type="float"
                       data-block="product_types"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Изображение (~210 пикселей высотой)</label>
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
                                            <input type="text" class="form-control alt-text" data-block="product_types"
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
                                           data-block="product_types"
                                           data-name="img"
                                           data-type="image"
                                           data-id="{{$item->id_field}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
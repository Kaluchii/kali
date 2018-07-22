@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Продукция'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Название</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->product_name_field}}"
                               data-name="product_name"
                               data-type="string"
                               data-block="other_products_list"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Вид ссылки в адресной строке</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->slug_field}}"
                               data-name="slug"
                               data-type="string"
                               data-block="other_products_list"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Иконка (51х51 пикселей)</label>
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
                                                    <input type="text" class="form-control alt-text" data-block="other_products_list"
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
                                                   data-block="other_products_list"
                                                   data-name="img"
                                                   data-type="image"
                                                   data-id="{{$item->id_field}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Текст описание продукции</label>
                        <textarea class="form-control text-editor"
                                  data-name="text"
                                  data-type="text"
                                  data-block="other_products_list"
                                  data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_title_field}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="other_products_list"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="other_products_list"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="other_products_list"
                                  data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seo_text"
                                  data-type="seo"
                                  data-block="other_products_list"
                                  data-id="{{$item->id_field}}">{{$item->seo_text_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
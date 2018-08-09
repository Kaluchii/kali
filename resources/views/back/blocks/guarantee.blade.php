@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Гарантии'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Название страницы</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->title_field}}"
                               data-name="title"
                               data-type="string"
                               data-block="guarantee"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Заголовок на баннере</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->banner_text_field}}"
                               data-name="banner_text"
                               data-type="string"
                               data-block="guarantee"
                               data-id="0">
                    </div>

                    <div class="form-group">
                        <label>Инструкция по эксплуатации</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">

                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <p style="font-size: 120px;"><i class="fa fa-file-image-o "></i></p>
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-actions">
                                                    <input type="text"
                                                           class="form-control title"
                                                           data-block="guarantee"
                                                           data-name="title"
                                                           data-type="file"
                                                           value="{{$block->instruction_field->title}}"
                                                           data-id="0"
                                                           placeholder="Имя файла при скачивании">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Удалить</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Отмена</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать …</span>
                                <input type="file" class="form-control files"
                                       data-block="guarantee"
                                       data-name="instruction"
                                       data-type="file"
                                       data-id="0">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Гарантийный талон</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">

                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <p style="font-size: 120px;"><i class="fa fa-file-image-o "></i></p>
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-actions">
                                                    <input type="text"
                                                           class="form-control title"
                                                           data-block="guarantee"
                                                           data-name="title"
                                                           data-type="file"
                                                           value="{{$block->guarantee_field->title}}"
                                                           data-id="0"
                                                           placeholder="Имя файла при скачивании">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group-btn">
                            <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Удалить</span></button>
                            <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Отмена</span></button>
                            <div tabindex="500" class="btn btn-primary btn-file">
                                <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                <span class="hidden-xs">Выбрать …</span>
                                <input type="file" class="form-control files"
                                       data-block="guarantee"
                                       data-name="guarantee"
                                       data-type="file"
                                       data-id="0">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Текстовый блок 1</label>
                        <textarea class="form-control text-editor"
                                  data-name="text"
                                  data-type="text"
                                  data-block="guarantee"
                                  data-id="0">{{$block->text_field}}</textarea>
                    </div>
                </div>

                <div class="box box-info group-item-widget" data-block="guarantee_facts_list">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Список фактов </h3>
                        <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                    </div>
                    <div class="box-body">
                        <div class="groupflat-widget group-item-wrap">
                            @foreach($block->guarantee_facts_list_group as $item)
                                @include('back.groups.guarantee_facts_list.guarantee_facts_list_box', ['item' => $item])
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label>Текстовый блок 2</label>
                        <textarea class="form-control text-editor"
                                  data-name="text2"
                                  data-type="text"
                                  data-block="guarantee"
                                  data-id="0">{{$block->text2_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Текст над отзывами</label>
                        <textarea class="form-control text textarea"
                                  data-name="reviews_title"
                                  data-type="text"
                                  data-block="guarantee"
                                  data-id="0">{{$block->reviews_title_field}}</textarea>
                    </div>
                </div>

                <div class="box box-info group-item-widget" data-block="reviews_list">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Список отзывов </h3>
                        <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                    </div>
                    <div class="box-body">
                        <div class="groupflat-widget group-item-wrap">
                            @foreach($block->reviews_list_group as $item)
                                @include('back.groups.reviews_list.reviews_list_box', ['item' => $item])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_title_field}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="guarantee"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="guarantee"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="guarantee"
                                  data-id="0">{{$block->seo_description_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seotext"
                                  data-type="text"
                                  data-block="guarantee"
                                  data-id="0">{{$block->seotext_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

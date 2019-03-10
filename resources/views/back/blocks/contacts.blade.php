@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Контакты'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->title_field}}"
                               data-name="title"
                               data-type="string"
                               data-block="contacts"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Подзаголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->sub_title_field}}"
                               data-name="sub_title"
                               data-type="string"
                               data-block="contacts"
                               data-id="0">
                    </div>
                </div>

                <div class="box box-info group-item-widget" data-block="contacts_list">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Локации </h3>
                        <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                    </div>
                    <div class="box-body">
                        <div class="groupflat-widget group-item-wrap">
                            @foreach($block->contacts_list_group as $item)
                                @include('back.groups.contacts_list.contacts_list_box', ['item' => $item])
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
                               data-block="contacts"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="contacts"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="contacts"
                                  data-id="0">{{$block->seo_description_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seotext"
                                  data-type="text"
                                  data-block="contacts"
                                  data-id="0">{{$block->seotext_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="contacts" data-id="0">

@endsection
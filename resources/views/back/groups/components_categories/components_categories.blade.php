@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория комплектующих'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Название категории</label>
                        <input class="form-control string js-slug-source"
                               type="text" placeholder=""
                               value="{{$item->category_name_field}}"
                               data-name="category_name"
                               data-type="string"
                               data-block="components_categories"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Вид ссылки в адресной строке</label>
                        <input class="form-control string slug"
                               type="text" placeholder=""
                               value="{{$item->slug_field}}"
                               data-name="slug"
                               data-type="string"
                               data-block="components_categories"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box table-widget">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    Комплектующие
                                </h3>
                                <button type="button" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                                <div class="col-xs-5 pull-right">
                                    <input type="text" class="form-control add-item"
                                           data-name="component_name"
                                           data-block="components_list"
                                           placeholder="Название элемента"
                                    >
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                       aria-describedby="example2_info"
                                       data-block="components_list">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="">Имя</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="">Дата редактирования</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="">Статус публикации</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="">Порядок выдачи</th>
                                        <th  tabindex="0"  rowspan="1"
                                             colspan="1" aria-label="">Удаление</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($item->components_list_group as $category)
                                        @include('back.groups.components_list.components_list_row',['item' => $category])
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
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
                               data-block="components_categories"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="components_categories"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="components_categories"
                                  data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seo_text"
                                  data-type="seo"
                                  data-block="components_categories"
                                  data-id="{{$item->id_field}}">{{$item->seo_text_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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
                        <label>Название страницы</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->title_field}}"
                               data-name="title"
                               data-type="string"
                               data-block="products"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Заголовок на баннере категории 1</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->banner_1_title_field}}"
                               data-name="banner_1_title"
                               data-type="string"
                               data-block="products"
                               data-id="0">
                    </div>

                    <div class="box box-info group-item-widget" data-block="firms_list_1">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Логотипы на баннере категории 1 </h3>
                            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                        </div>
                        <div class="box-body">
                            <div class="groupflat-widget group-item-wrap">
                                @foreach($block->firms_list_1_group as $item)
                                    @include('back.groups.firms_list_1.firms_list_1_box', ['item' => $item])
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box table-widget">
                                <div class="box-header with-border">
                                    <h3 class="box-title">
                                        Продукция (категория 1)
                                    </h3>
                                    <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                                    <div class="col-xs-5 pull-right">
                                        <input type="text" class="form-control add-item"
                                               data-name="product_name"
                                               data-block="products_list_1"
                                               placeholder="Название элемента"
                                        >
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                           aria-describedby="example2_info"
                                           data-block="products_list_1">
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

                                        @foreach($block->products_list_1_group as $item)
                                            @include('back.groups.products_list_1.products_list_1_row',['item' => $item])
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
                               data-block="products"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="products"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="products"
                                  data-id="0">{{$block->seo_description_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>SEO-текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="seotext"
                                  data-type="text"
                                  data-block="products"
                                  data-id="0">{{$block->seotext_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
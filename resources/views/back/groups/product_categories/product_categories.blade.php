@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория изделий'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название категории</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->category_name_field}}"
                       data-name="category_name"
                       data-type="string"
                       data-block="product_categories"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Изображение (~160 пикселей высотой)</label>
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
                                            <input type="text" class="form-control alt-text" data-block="product_categories"
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
                                           data-block="product_categories"
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

        <div class="row">
            <div class="col-xs-12">
                <div class="box table-widget">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Типы изделий
                        </h3>
                        <button type="button" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                        <div class="col-xs-5 pull-right">
                            <input type="text" class="form-control add-item"
                                   data-name="type_name"
                                   data-block="product_types"
                                   placeholder="Название элемента"
                            >
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                               aria-describedby="example2_info"
                               data-block="product_types">
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

                            @foreach($item->product_types_group as $type)
                                @include('back.groups.product_types.product_types_row',['item' => $type])
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
@endsection
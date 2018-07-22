@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Продукция'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок на баннере категории 2</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->banner_2_title_field}}"
                       data-name="banner_2_title"
                       data-type="string"
                       data-block="products"
                       data-id="0">
            </div>

            <div class="box box-info group-item-widget" data-block="firms_list_2">
                <div class="box-header with-border">
                    <h3 class="box-title"> Логотипы на баннере категории 2 </h3>
                    <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($block->firms_list_2_group as $item)
                            @include('back.groups.firms_list_2.firms_list_2_box', ['item' => $item])
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box table-widget">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                Продукция (категория 2)
                            </h3>
                            <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                            <div class="col-xs-5 pull-right">
                                <input type="text" class="form-control add-item"
                                       data-name="product_name"
                                       data-block="products_list_2"
                                       placeholder="Название элемента"
                                >
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                   aria-describedby="example2_info"
                                   data-block="products_list_2">
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

                                @foreach($block->products_list_2_group as $item)
                                    @include('back.groups.products_list_2.products_list_2_row',['item' => $item])
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
@endsection
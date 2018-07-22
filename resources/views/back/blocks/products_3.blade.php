@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Продукция'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box table-widget">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                Другая продукция
                            </h3>
                            <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                            <div class="col-xs-5 pull-right">
                                <input type="text" class="form-control add-item"
                                       data-name="product_name"
                                       data-block="other_products_list"
                                       placeholder="Название элемента"
                                >
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                   aria-describedby="example2_info"
                                   data-block="other_products_list">
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

                                @foreach($block->other_products_list_group as $item)
                                    @include('back.groups.other_products_list.other_products_list_row',['item' => $item])
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
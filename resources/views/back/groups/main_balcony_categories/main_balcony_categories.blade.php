@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория балконов'])
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
                       data-block="main_balcony_categories"
                       data-id="{{$item->id_field}}">
            </div>


            <div class="row">
                <div class="col-xs-12">
                    <div class="box table-widget">
                        <div class="box-header with-border">
                            <h3 class="box-title">
                                Типы балконов
                            </h3>
                            <button type="button" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                            <div class="col-xs-5 pull-right">
                                <input type="text" class="form-control add-item"
                                       data-name="type_name"
                                       data-block="main_balcony_types"
                                       placeholder="Название элемента"
                                >
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                   aria-describedby="example2_info"
                                   data-block="main_balcony_types">
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

                                @foreach($item->main_balcony_types_group as $category)
                                    @include('back.groups.main_balcony_types.main_balcony_types_row',['item' => $category])
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
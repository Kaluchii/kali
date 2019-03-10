@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория окон'])
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
                       data-block="windows_price_categories"
                       data-id="{{$item->id_field}}">
            </div>


            <div class="box box-info group-item-widget" data-block="windows_price_list">
                <div class="box-header with-border">
                    <h3 class="box-title"> Окна </h3>
                    <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($item->windows_price_list_group as $window_item)
                            @include('back.groups.windows_price_list.windows_price_list_box', ['item' => $window_item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="main_windows_price" data-id="0">

@endsection
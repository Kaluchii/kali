@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Тип окон'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название типа</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->type_name_field}}"
                       data-name="type_name"
                       data-type="string"
                       data-block="main_windows_types"
                       data-id="{{$item->id_field}}">
            </div>


            <div class="box box-info group-item-widget" data-block="main_windows_price_list">
                <div class="box-header with-border">
                    <h3 class="box-title"> Окна </h3>
                    <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($item->main_windows_price_list_group as $window_item)
                            @include('back.groups.main_windows_price_list.main_windows_price_list_box', ['item' => $window_item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="slider" data-id="0">

@endsection
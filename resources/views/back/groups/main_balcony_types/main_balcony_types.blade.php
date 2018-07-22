@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Тип балконов'])
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
                       data-block="main_balcony_types"
                       data-id="{{$item->id_field}}">
            </div>


            <div class="box box-info group-item-widget" data-block="main_balcony_list">
                <div class="box-header with-border">
                    <h3 class="box-title"> Балконы </h3>
                    <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($item->main_balcony_list_group as $balcony_item)
                            @include('back.groups.main_balcony_list.main_balcony_list_box', ['item' => $balcony_item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
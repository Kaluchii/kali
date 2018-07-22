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
                       data-block="balcony_price_categories"
                       data-id="{{$item->id_field}}">
            </div>


            <div class="box box-info group-item-widget" data-block="balcony_price_list">
                <div class="box-header with-border">
                    <h3 class="box-title"> Балконы </h3>
                    <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($item->balcony_price_list_group as $balcony_item)
                            @include('back.groups.balcony_price_list.balcony_price_list_box', ['item' => $balcony_item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
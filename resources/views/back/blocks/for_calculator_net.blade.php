@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Москитная сетка'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Стоимость 1м² белой москитной сетки</label>
                <input class="form-control float"
                       type="number" placeholder=""
                       value="{{$block->net_price_field}}"
                       data-name="net_price"
                       data-type="float"
                       data-block="for_calculator"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Стоимость 1м² цветной москитной сетки</label>
                <input class="form-control float"
                       type="number" placeholder=""
                       value="{{$block->net_price_color_field}}"
                       data-name="net_price_color"
                       data-type="float"
                       data-block="for_calculator"
                       data-id="0">
            </div>
        </div>
    </div>
@endsection
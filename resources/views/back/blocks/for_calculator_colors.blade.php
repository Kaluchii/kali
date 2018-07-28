@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Цвета'])
    <div class="box box-info group-item-widget" data-block="colors">
        <div class="box-header with-border">
            <h3 class="box-title"> Список цветов изделий </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->colors_group as $item)
                    @include('back.groups.colors.colors_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Стеклопакеты'])
    <div class="box box-info group-item-widget" data-block="double_glazed_windows">
        <div class="box-header with-border">
            <h3 class="box-title"> Стеклопакеты </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->double_glazed_windows_group as $item)
                    @include('back.groups.double_glazed_windows.double_glazed_windows_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
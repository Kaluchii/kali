@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Подоконники'])
    <div class="box box-info group-item-widget" data-block="window_sill">
        <div class="box-header with-border">
            <h3 class="box-title"> Подоконники </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->window_sill_group as $item)
                    @include('back.groups.window_sill.window_sill_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
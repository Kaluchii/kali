@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Отливы'])
    <div class="box box-info group-item-widget" data-block="outflow">
        <div class="box-header with-border">
            <h3 class="box-title"> Отливы </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->outflow_group as $item)
                    @include('back.groups.outflow.outflow_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
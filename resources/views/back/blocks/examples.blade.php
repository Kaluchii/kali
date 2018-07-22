@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Примеры профиля'])
    <div class="box box-info group-item-widget" data-block="examples_list">
        <div class="box-header with-border">
            <h3 class="box-title"> Примеры профиля </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($block->examples_list_group as $item)
                    @include('back.groups.examples_list.examples_list_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Преимущества'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок блока</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->title_field}}"
                       data-name="title"
                       data-type="string"
                       data-block="advantages"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Подзаголовок блока</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->sub_title_field}}"
                       data-name="sub_title"
                       data-type="string"
                       data-block="advantages"
                       data-id="0">
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="advantages_list">
        <div class="box-header with-border">
            <h3 class="box-title"> Список преимуществ </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($block->advantages_list_group as $item)
                    @include('back.groups.advantages_list.advantages_list_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="slider" data-id="0">

@endsection
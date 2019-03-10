@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Слайдер'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок в слайдере</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->title_field}}"
                       data-name="title"
                       data-type="string"
                       data-block="slider"
                       data-id="0">
            </div>

            <div class="box box-info group-item-widget" data-block="slider_facts">
                <div class="box-header with-border">
                    <h3 class="box-title"> Факты в слайдере </h3>
                    <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($block->slider_facts_group as $item)
                            @include('back.groups.slider_facts.slider_facts_box', ['item' => $item])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="slides">
        <div class="box-header with-border">
            <h3 class="box-title"> Слайды </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($block->slides_group as $item)
                    @include('back.groups.slides.slides_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

    <input class="form-control string" type="hidden" value="{{time()}}"
           data-name="last_modified" data-type="string" data-block="slider" data-id="0">

@endsection
@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Факты'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Текст над блоком фактов</label>
                <textarea class="form-control text-editor"
                          data-name="text"
                          data-type="string"
                          data-block="facts"
                          data-id="0">{{$block->text_field}}</textarea>
            </div>
        </div>
    </div>


    <div class="box box-info group-item-widget" data-block="facts_list">
        <div class="box-header with-border">
            <h3 class="box-title"> Факты </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($block->facts_list_group as $item)
                    @include('back.groups.facts_list.facts_list_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
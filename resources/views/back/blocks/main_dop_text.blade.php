@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Об окнах'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control text-editor"
                          data-name="text"
                          data-type="text"
                          data-block="main_dop_text"
                          data-id="0">{{$block->text_field}}</textarea>
            </div>
        </div>
    </div>
@endsection
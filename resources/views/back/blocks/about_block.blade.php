@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'О компании'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля страницы</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$about_block->about_title_field}}"
                       data-name="about_title"
                       data-type="string"
                       data-block="about_block"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>О Компании</label>
                <textarea class="form-control text"
                          data-name="about_text"
                          data-type="text"
                          data-block="about_block"
                          data-id="0">{{$about_block->about_text_field}}</textarea>
            </div>
         </div>
    </div>
@endsection
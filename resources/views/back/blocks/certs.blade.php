@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Сертификаты'])
    <div class="box box-info group-item-widget"
         data-block="certs">
        <div class="box-header with-border">
            <h3 class="box-title">Сертификаты</h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить сертификат</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($certs as $item)
                    @include('back.groups.certs.certs_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection
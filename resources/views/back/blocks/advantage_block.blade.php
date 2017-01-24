@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Преимущества'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля страницы</h3>
        </div>


        <div class="box-body">
            <div class="form-group">
                <label>Текст под 6-м преимуществом</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$advantage_block->adv_big_text_field}}"
                       data-name="adv_big_text"
                       data-type="string"
                       data-block="advantage_block"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>6-е преимущество</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$advantage_block->adv_big_image->link}}?{{$advantage_block->adv_big_image->cache_index}}" class="kv-preview-data file-preview-image" title="{{$advantage_block->adv_big_image->alt}}" alt="{{$advantage_block->adv_big_image->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$advantage_block->adv_big_image->alt}}">{{$advantage_block->adv_big_image->name_field}} <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="advantage_block" data-type="images" data-id="0" data-name="alt">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files"
                            class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload"
                            class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="advantage_block"
                               data-name="adv_big_image"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>
            </div>
         </div>

        <div class="box box-info group-item-widget"
             data-block="advantages">
            <div class="box-header with-border">
                <h3 class="box-title">Преимущества</h3>
                <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
            </div>
            <div class="box-body">

                <div class="groupflat-widget group-item-wrap">
                    @foreach($advantage_block->advantages_group as $item)
                        @include('back.groups.advantages.advantages_box', ['item' => $item])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
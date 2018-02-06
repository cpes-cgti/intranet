@extends('adminlte::page')

@section('title', 'Notícias')

@section('CSS')
    <!-- bootstrap-fileinput -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.min.css') }}">
    <!-- bootstrap3-wysihtml5 -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap3-wysihtml5/css/bootstrap3-wysihtml5.min.css') }}">
@stop

@section('Scripts')
    <!-- bootstrap-fileinput -->
    <script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/piexif.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/purify.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-fileinput/js/locales/pt-BR.js') }}"></script>
    <script>
        $("#thumbnail").fileinput({
            language: "pt-BR",
            uploadUrl: "{{ asset('img/noticias') }}",
            showUpload: false,
            allowedFileExtensions: ["jpg", "png", "gif"],
            minImageWidth: 175,
            minImageHeight: 105,
            initialPreview: [
                '/storage/noticias/{{ $post->thumbnail or "noticia.jpg" }}',
            ],
            initialPreviewAsData: true,
            initialPreviewConfig: [
                {caption: "miniatura.jpg", url: "/storage/noticias/{{ $post->thumbnail or 'noticia.jpg' }}"},
            ],
            initialPreviewShowDelete: false,
        });
    </script>
    <!-- CK Editor -->
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    {{--  <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>  --}}
    <!-- bootstrap3-wysihtml5 -->
    {{--  <script src="{{ asset('vendor/bootstrap3-wysihtml5/js/bootstrap3-wysihtml5.all.min.js') }}"></script>  --}}

    <script>
        
        CKEDITOR.replace('text',{
            language: 'pt-BR',
            height: 400,
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            
        

        });
        //filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        //filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    </script>
@stop

@section('content_header')
    @isset($post)
        <h1>@lang('dashboard.edit') @lang('post.post')</h1>
    @else
        <h1>@lang('dashboard.add') @lang('post.post')</h1>
    @endisset
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">@lang('dashboard.dashboard')</a></li>
        <li><a href="{{ route('post.index') }}">@lang('post.posts')</a></li>
        @isset($post)
            <li><a href="{{ route('post.edit', $post) }}">@lang('dashboard.edit')</a></li>
        @else
            <li><a href="{{ route('post.create') }}">@lang('dashboard.add')</a></li>
        @endisset
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i>@lang('dashboard.back')</a>
        </div>
        <div class="box-body">
            @if ($errors->any() || session('error_upload'))
                <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> @lang('dashboard.alert')</h4>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach 
                @if (session('error_upload'))
                    <p>{{ session('error_upload') }}</p>
                @endif
            </div>
            @endif
            @isset($post)
                <form method="post" action="{{ route('post.update', $post) }}" enctype="multipart/form-data">
                    {{ method_field('PUT')}}
            @else
                <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @endisset
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">@lang('post.title')</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="@lang('post.title_placeholder')" value="{{ $post->title or old('title') }}">
                </div>
                <div class="form-group">
                    <label for="caption">@lang('post.caption')</label>
                    <input type="text" class="form-control" id="caption" name="caption" placeholder="@lang('post.caption_placeholder')" value="{{ $post->caption or old('caption') }}">
                </div>
                <div class="form-group">
                    <label for="thumbnail">@lang('post.thumbnail')</label>
                    <div class="file-loading">
                        <input id="thumbnail" name="thumbnail" type="file" accept="image/*" value="{{ $post->thumbnail or old('thumbnail') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text">@lang('post.text')</label>
                    <textarea id="text" name="text"> {{ $post->text or old('text') }}</textarea>
                </div>
                <div class="col-md-2 col-md-offset-10">
                    <button type="submit" class="btn btn-success btn-block"><i class="fa fa-fw fa-save"></i>@lang('dashboard.save')</button>
                </div>
            </form>
        </div>
    </div>
    
@stop
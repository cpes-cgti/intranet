@extends('adminlte::page')

@section('title')
    @lang('post.posts') - 
@stop

@section('content_header')
    <h1>@lang('post.posts')</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">@lang('dashboard.dashboard')</a></li>
        <li><a href="{{ route('post.index') }}">@lang('post.posts')</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            @can('create', App\Models\Post::class)
            <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="fa fa-fw fa-plus-square-o"></i>@lang('dashboard.add') @lang('post.post')</a>
            @endcan
        </div>
        <div class="box-body">
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> @lang('dashboard.alert')</h4>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <table class="table table-striped" data-form="deleteForm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('post.title')</th>
                        <th>@lang('post.caption')</th>
                        <th>@lang('post.published_at')</th>
                        <th style="min-width: 150px">@lang('dashboard.actions')</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->caption}}</td>
                        <td>{{$post->user->name}}</td>
                        <td>
                            @can('view', $post)
                                <a href="{{ route('post.show', $post) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            @endcan
                            @can('update', $post)
                                <a href="{{ route('post.edit', $post) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            @endcan
                            @can('delete', $post)
                                <form method="post" action="{{ route('post.destroy', $post) }}" style="display:inline;" class="form-delete">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
            {!! $posts->links() !!}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="dialog_del">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">@lang('dashboard.delete') @lang('post.post')?</h4>
                </div>
                <div class="modal-body">
                <p>@lang('dashboard.confirm_delete')</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('dashboard.cancel')</button>
                    <button type="button" class="btn btn-danger" id="delete-btn">@lang('dashboard.confirm')</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('Scripts')
    <script>
        $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
            e.preventDefault();
            var $form=$(this);
            $('#dialog_del').modal()
                .on('click', '#delete-btn', function(){
                    $form.submit();
                });
        });
    </script>
@stop
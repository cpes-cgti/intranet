<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="fa fa-fw fa-calendar"></i>{{$post->created_at}}
        </h3>
        <div class="box-tools pull-right">
            <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-primary btn-sm">
                <i class="fa fa-arrow-circle-left"></i>
            </a>
        </div>
    </div>
    <div class="panel panel-default" style="padding: 10px;">
        <h2>{{$post->title}}</h2><br>
        <h4>{{$post->caption}}</h4><br>
        {!! $post->text !!}
    </div>
    <div class="box-footer">
        <div class="box-tools pull-right">
            <i class="fa fa-fw fa-user"></i>@lang('post.published_at'): {{$post->user->name}}
        </div>
    </div>
 </div>
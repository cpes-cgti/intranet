<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Notícias</h3>
    </div>
    @foreach ($posts as $post)
    <div class="panel panel-default">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-xs-4" id="img-noticia">
                    @if( is_null($post->thumbnail) || $post->thumbnail =="")
                        <img src="{{ asset('storage/noticias/noticia.jpg') }}" alt="" class="img-100">
                    @else
                        <img src="{{ asset('storage/noticias/') }}/{{$post->thumbnail}}" alt="" class="img-100">
                    @endif
                </div>
                <div class="col-sm-8 col-xs-8" id="txt-noticia">
                    <div class="row data-noticia">
                        <p><i class="fa fa-fw fa-calendar"></i>{{$post->created_at}}</p>    
                    </div>
                    <div class="row titulo-noticia">
                        <h4><b>{{$post->title}}</b></h4>    
                    </div>
                    <div class="row subtitulo-noticia">
                        <p>{{$post->caption}}</p>
                    </div>
                    <div class="row link-noticia">
                        <a href="{{ route('news', $post) }}">Leia mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {!! $posts->links() !!}
 </div>
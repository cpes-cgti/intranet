@extends('adminlte::page')

@section('title', 'Notícias')

@section('content_header')
    <h1>@lang('post.posts')</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">@lang('dashboard.dashboard')</a></li>
        <li><a href="{{ route('post.index') }}">@lang('post.posts')</a></li>
        <li><a href="{{ route('post.show', $post) }}">@lang('dashboard.show')</a></li>
    </ol>
@stop

@section('content')
    @include('posts.posts')
@stop
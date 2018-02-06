@extends('adminlte::page')

@section('title')
    @lang('dashboard.profile') - 
@stop

@section('content_header')
    <h1>@lang('dashboard.profile')</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">@lang('dashboard.dashboard')</a></li>
        <li><a href="{{ route('post.index') }}">@lang('dashboard.profile')</a></li>
    </ol>
@stop
@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">@lang('dashboard.change_password')</h3>
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
            @if (session('confirm'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check-square"></i> @lang('dashboard.success')</h4>
                    <p>{{ session('confirm') }}</p>
                </div>
            @endif
            <form class="form-horizontal" method="post" action="{{ route('user.password') }}">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input type="password" name="password" class="form-control"
                                placeholder="{{ trans('adminlte::adminlte.password') }}">
                    </div>
                    <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <input type="password" name="password_confirmation" class="form-control"
                                placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    </div>
                </div>
                <!-- /.box-body -->
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    @lang('dashboard.change_password')
                </button>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
@stop
    

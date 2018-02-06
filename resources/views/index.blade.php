@extends('template')

@section('content')
    <section class="container">
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                @include('services')
                @include('links')
            </div>
            <div class="col-sm-8 col-xs-12">
                @include('news')
            </div>
        </div>
    </section>
@stop
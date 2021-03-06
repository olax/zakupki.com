@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('share.component.title')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('share.component.buttons')
                @include('share.component.tabs')
            </div>
        </div>
        {{--@if ($tender->canQuestion())--}}
        <div class="row">
            <div class="col-md-12">
            <div class="well">
                @include('pages.question.component.form')
            </div>
                </div>
        </div>
        {{--@endif--}}
    </div>
@endsection
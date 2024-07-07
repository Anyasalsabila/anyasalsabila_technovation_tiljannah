@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gaia.css') }}">
@endsection

@section('background')
    <style>
        body {
            background-image: url("{{ asset('img/bg.jpg') }}");
            background-size: cover;
        }
    </style>
@endsection

@section('navbar')
    @include('partials.navbar')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $content->title }}</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            {!! $content->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

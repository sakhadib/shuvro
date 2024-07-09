@extends('layouts.app')

@section('main')

<link rel="stylesheet" href="/css/home.css">

<div class="vh-10"></div>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="title">
                Experience I have <span class="l">earned</span> through the years...
            </h1>
            <hr>
        </div>
    </div>
    <div class="row mt-5">
        @foreach($experiences as $experience)
        <div class="col-md-6 mt-3">
            <div class="card sh-card" data-tilt>
                <div class="card-body">
                    <h4 class="card-title">{{$experience->title}}</h4>
                    <p class="card-text lead">{{$experience->where}} | {{$experience->company}}</p>
                    <p class="card-text">{{$experience->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
@extends('layouts.app')

@section('main')

<link rel="stylesheet" href="/css/home.css">


<div class="page df aic">
    <div class="container">
        <div class="row">
            <div class="col-md-6 df jcc aic d-flex d-md-none">
                <img src="/rsx/shuvro.png" alt="" class="shuvro-img">
            </div>
            <div class="col-md-6 df dfc jcc mt-5">
                <h1 class="title">Hi, I'm Adib Sakhawat</h1>
                <p class="subtitle mb-4">
                    I'm a software engineering student at
                    <a href="https://iutoic-dhaka.edu" class="link-success">Islamic University of Technology</a>. 
                    I love to develop new things.
                </p>
                <div class="row">
                    <div class="col-auto">
                        <a href="https://github.com/sakhadib" class="btn btn-outline-dark">GitHub</a>
                        <a href="https://github.com/sakhadib" class="btn btn-dark">Download CV</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 df jcc aic d-none d-md-flex">
                <img src="/rsx/shuvro.png" alt="" class="shuvro-img">
            </div>
        </div>
        
    </div>
</div>



@endsection
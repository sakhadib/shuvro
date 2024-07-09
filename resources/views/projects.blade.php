@extends('layouts.app')

@section('main')
<link rel="stylesheet" href="/css/home.css">

<div class="vh-10"></div>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="title">
                Projects I have <span class="l">done</span> so far...
            </h1>
            <hr>
            <div class="row">
                <marquee behavior="" direction="" class="mar">
                    @foreach($skills as $skill)
                        <span>
                            <span class="skill-card">
                                <img src="{{$skill->image}}" alt="" class="skill-img"> {{$skill->name}}
                            </span>
                        </span>
                    @endforeach
                </marquee>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-6 mt-2">
                        <a href="{{$project->repo_url}}">
                            <img src="https://github-readme-stats-ecru-kappa-77.vercel.app/api/pin/?username=sakhadib&repo={{$project->repo_name}}" alt="" style="width: 100%">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="row mt-2">
                <div class="col-12">
                    <img src="https://github-readme-streak-stats.herokuapp.com/?user=sakhadib" alt="" style="width: 100%; height: 100%"> 
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <img src="https://github-readme-stats-ecru-kappa-77.vercel.app/api?username=sakhadib&show_icons=true&theme=transparent" alt="" style="width: 100%">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <img src="https://github-readme-stats-ecru-kappa-77.vercel.app/api/top-langs/?username=sakhadib&layout=donut-vertical&langs_count=20&card_width=325&custom_title=Languages" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
@extends('layouts.app')

@section('main')

<link rel="stylesheet" href="/css/home.css">


<div class="page df aic" id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 df jcc aic d-flex d-md-none">
                <img src="/rsx/shuvro.png" alt="" class="shuvro-img">
            </div>
            <div class="col-md-6 df dfc jcc mt-5">
                <h1 class="title">Hi, I'm <span class="l">Adib Sakhawat</span></h1>
                <p class="subtitle mb-4">
                    I'm a software engineering student at
                    <a href="https://iutoic-dhaka.edu" class="link-success">Islamic University of Technology</a>. 
                    I love to develop new things.
                </p>
                <div class="row">
                    <div class="col-auto">
                        <a href="https://github.com/sakhadib" class="btn btn-lg btn-outline-dark">GitHub</a>
                        <a href="https://github.com/sakhadib" class="btn btn-lg btn-dark">Download CV</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 df jcc aic d-none d-md-flex">
                <img src="/rsx/shuvro.png" alt="" class="shuvro-img">
            </div>
        </div>
        
    </div>
</div>


<div class="page df aic">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">
                    For some people <span class="l">Learning</span> is a <span class="l">Passion</span>
                </h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-7">
                <div class="row">
                    @foreach($skills as $skill)
                        <div class="col-md-2 col-3 df jcc aic mt-3">
                            <div class="lang-box df jcc aic">
                                <img src="{{$skill->image}}" alt="" class="lang-icon">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 offset-md-1">
                <div class="row mt-md-0 mt-5">
                    <div class="col-12">
                        <h1 class="fs-4">
                            Languages
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row mt-1">
                    @foreach($language_skill as $ls)
                        <div class="col-auto mt-1">
                            <div class="df aic">
                                <p class="lead">{{$ls->name}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="fs-4">
                            Database Administration
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row mt-1">
                    @foreach($database_skill as $ds)
                        <div class="col-auto mt-1">
                            <div class="df aic">
                                <p class="lead">{{$ds->name}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="fs-4">
                            Libraries
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row mt-1">
                    @foreach($library_skill as $ls)
                        <div class="col-auto mt-1">
                            <div class="df aic">
                                <p class="lead">{{$ls->name}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="fs-4">
                            Frameworks
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row mt-1">
                    @foreach($framework_skill as $fs)
                        <div class="col-auto mt-1">
                            <div class="df aic">
                                <p class="lead">{{$fs->name}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <h1 class="fs-4">
                            Softwares
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row mt-1">
                    @foreach($software_skill as $ss)
                        <div class="col-auto mt-1">
                            <div class="df aic">
                                <p class="lead">{{$ss->name}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<div class="vh-20"></div>

<div class="page df aic" id="experience">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">
                    I Know <span class="l">Learning</span> is a Journey <br>
                    This Journey Gains <span class="l">Experience</span>
                </h1>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($experiences as $experience)
            <div class="col-md-6 mt-3">
                <div class="card sh-card" data-tilt>
                    <div class="card-body">
                        <h4 class="card-title">{{$experience->title}}</h4>
                        <p class="card-text lead">{{$experience->where}} | {{$experience->company}}</p>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($experience->description, 250) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-3">
            <div class="col-12 df jcc">
                <a href="/experience" class="btn btn-lg btn-outline-dark">View All Experiences</a>
            </div>
        </div>
    </div>
</div>

<div class="vh-15"></div>

<div class="page df aic">
    <div class="container">
        <div class="row">
            <div class="col-md-12 df aic">
                <h1 class="title">
                    <span class="l">Knowledge</span> speaks for itself. <br>
                    Here are some of my <span class="l">Projects</span>
                 </h1>
            </div>
        </div>

        <div class="row mt-4">
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
                <div class="row mt-4">
                    <div class="col-12 df jcc">
                        <a href="/projects" class="btn btn-lg btn-outline-secondary d-none d-md-block">View All Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row mt-2">
                    <div class="col-12 df jcc">
                        <img src="https://github-readme-stats-ecru-kappa-77.vercel.app/api/top-langs/?username=sakhadib&layout=donut-vertical&langs_count=20&card_width=325&custom_title=Languages" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 df jcc">
                <a href="/projects" class="btn btn-lg btn-outline-dark d-md-none">View All Projects</a>
            </div>
        </div>
    </div>
</div>



<div class="page df aic">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">
                    My <span class="l">GitHub</span> wanna say something...
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-12">
                        <img src="https://github-readme-streak-stats.herokuapp.com/?user=sakhadib" alt="" style="width: 100%; height: 100%"> 
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <img src="https://github-readme-stats-ecru-kappa-77.vercel.app/api?username=sakhadib&show_icons=true&theme=transparent" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row mt-4">
                    <div class="col-12">
                        <img src="https://github-profile-trophy.vercel.app/?username=sakhadib&row=2&column=3&margin-w=15&margin-h=15" alt="sakhadib" style="width: 100%; height: 100%">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 df jcc">
                        <a target="blank" href="https://github.com/sakhadib" class="btn btn-lg btn-outline-secondary">Visit My Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
<script src="/js/tilt.js"></script>

@endsection
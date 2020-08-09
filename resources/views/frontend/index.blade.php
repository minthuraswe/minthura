@extends('frontend.layouts.master')
@section('content')
<section>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="row justify-content-center">
                    <h5>PROJECTS</h5>
                </div>
            </div>
            
            @foreach ($project as $get)
            <div class="col-md-2 col-6 mb-4">
                <div class="card view overlay zoom view overlay">
                    <a href="{{$get->pj_link}}">
                        <img src="{{asset('uploads/' . $get->pj_image)}}" class="card-img-top max-height">
                        <div class="mask flex-center rgba-black-strong">
                            <p class="white-text">
                                <svg width="1.8em" height="1.8em" viewBox="0 0 16 16" class="bi bi-link-45deg" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.715 6.542L3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.001 1.001 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                                    <path d="M5.712 6.96l.167-.167a1.99 1.99 0 0 1 .896-.518 1.99 1.99 0 0 1 .518-.896l.167-.167A3.004 3.004 0 0 0 6 5.499c-.22.46-.316.963-.288 1.46z"/>
                                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 0 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 0 0-4.243-4.243L6.586 4.672z"/>
                                    <path d="M10 9.5a2.99 2.99 0 0 0 .288-1.46l-.167.167a1.99 1.99 0 0 1-.896.518 1.99 1.99 0 0 1-.518.896l-.167.167A3.004 3.004 0 0 0 10 9.501z"/>
                                </svg>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card-body text-center">
                    <a href="{{$get->pj_gh_link}}"><img src="{{asset('/images/github.png')}}"></a>
                </div>
 
            </div>
            @endforeach
            
            <div class="col-md-12">
                <div class="row justify-content-center">
                    {{$project->links()}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
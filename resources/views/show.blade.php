@extends('master');
@section('title') Blog Home @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="">
                    <div class="card my-5">
                        <div class="card-body">
                            <div class="d-flex  justify-content-between align-items-center">
                                <div class="">
                                    <h1>Post Detail</h1>

                                </div>
                                <div class="">
                                    <a href="{{route('post.index')}}" class="btn btn-lg btn-outline-primary">
                                        Home
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                        <div class="card">
                            <div class="card-body">
                                <h4>{{$post->title}}</h4>
                                <p class="text-black-50">{{$post->description}}</p>


                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection

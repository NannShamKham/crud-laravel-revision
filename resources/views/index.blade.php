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
                                        <h1>Hello...</h1>
                                        <p class="mb-0 text-black-50">What is on your mind</p>
                                    </div>
                                    <div class="">
                                        <a href="{{route('post.create')}}" class="btn btn-lg btn-outline-primary">
                                            Create Post
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @if(session('status'))
                            <div class="alert alert-primary">
                                {{session('status')}}
                            </div>
                            @endif
                        @foreach($posts as $post)
                        <div class="card">
                            <div class="card-body">
                                <h4>{{$post->title}}</h4>
                                <p class="text-black-50">{{Str::words($post->description,50)}}</p>
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <p class="small">{{$post->created_at->format('j F y | n : i a')}}</p>
                                    </div>
                                    <div class="">
                                        <form class="d-inline-block" action="{{route('post.destroy',$post->id)}}" method="post">
                                            @csrf
                                           @method('delete')
                                            <button class="btn btn-outline-danger btn-sm ">Del</button>
                                        </form>
                                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-outline-primary btn-sm">edit</a>
                                        <a href="{{route('post.show',$post->id)}}" class="btn btn-outline-primary btn-sm">see more</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @endforeach


                    </div>
                <div class="">
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

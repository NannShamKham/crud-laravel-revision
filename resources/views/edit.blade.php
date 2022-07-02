@extends('master');
@section('title') Edit Post @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex  justify-content-between align-items-center">
                                <div class="">
                                    <h1>Create New Post</h1>

                                </div>
                                <div class="">
                                    <a href="{{route('post.index')}}" class="btn btn-lg btn-outline-primary">
                                        home
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <form action="{{route('post.update',$post->id)}}" method="post" >
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control form-control-lg"  value="{{$post->title}}" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea rows="10" type="text" class="form-control form-control-lg" name="description">
                                {{$post->description}}
                            </textarea>
                        </div>
                        <div class="text-end">
                            <button class="btn btn-lg btn-primary">Update Post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

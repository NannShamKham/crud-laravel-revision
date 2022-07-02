@extends('master');
@section('title') Create Post @endsection
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
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                <li class="mb-0">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('post.store')}}" method="post" >
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                            @error('title')
                            <span class="invalid-feedback"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea rows="10" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description">{{old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="text-end">
                            <button class="btn btn-lg btn-primary">Add Post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

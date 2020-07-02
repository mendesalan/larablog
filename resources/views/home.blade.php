@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 container">

            <div class="card">
                <br>
                <a href="/create" class="home__newPost">Create a New Post!</a>
                <br>
                @if(auth()->user()->is_admin == true)
                    <a href="/api/import" class="home__newPost">Import Posts!</a>
                @endif
                <br>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Your Posts</div>
                <br>
                <Post
                    :posts="{{ $posts }}"
                    :can-edit="true"
                ></Post>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<Post
    :posts="{{ $posts }}"
></Post>

@endsection

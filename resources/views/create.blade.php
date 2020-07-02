@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/save">
        {{ csrf_field() }}
        <div class="form-group">
            <input value="title" name="title" type="text" class="" placeholder="Title">
        </div>

        <textarea id="description" class="text" cols="86" rows ="20" name="description"></textarea>
        <br>
        <div class="">
            <button type="submit" class="">Save</button>
        </div>

    </form>
</div>
@endsection
